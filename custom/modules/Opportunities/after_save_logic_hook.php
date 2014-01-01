<?php

/**
 * @File: after_save_logic_hook.php
 * @Author: Venkata Krishna C V
 * @Date: 12/12/2013
 * @Purpose: This file is used to change the Contact Type of Opportunity's related Contact to Council Member, create records in the modules Council Member and Council Membership, if Opportunity sales stage is Closed Won on Save.
 */
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class AfterSaveOpportunities{
	function salesStageChange($bean,$event,$arguments){
		$accBean = BeanFactory::getBean('Accounts',$bean->account_id);
		$contact = BeanFactory::getBean('Contacts',$bean->contact_id_c);
		$grp = BeanFactory::getBean('Bhea_Councils',$bean->bhea_councils_opportunities_1bhea_councils_ida);
		$mem_lvl_obj = BeanFactory::getBean("Bhea_member_levels",$bean->bhea_member_levels_opportunities_1_name);
		if($bean->sales_stage == "Closed Won")
		{
			//Create an Order Record
			$orderBean = BeanFactory::newBean('Bhea_Orders');
			global $db;
			$query = "SELECT id_auto_c FROM bhea_orders_cstm order by id_auto_c desc limit 0,1";
			$res=$db->query($query);
			$que=$db->fetchByAssoc($res); //Array
			$val=$que['id_auto_c'];
			$orderBean->name = "O-".$accBean->company_id_c."-".$val;
			$orderBean->value = $bean->final_membership_fee_c;
			$orderBean->order_date = $bean->actual_close_date_c;
			$orderBean->accounts_bhea_orders_1accounts_ida = $bean->account_id;
			$orderBean->bill_to_address = $accBean->billing_address_street;
			$orderBean->bill_to_address_city = $accBean->billing_address_city;
			$orderBean->bill_to_address_country = $accBean->billing_address_country;
			$orderBean->bill_to_address_postalcode = $accBean->billing_address_postalcode;
			$orderBean->bill_to_address_state = $accBean->billing_address_state;
			$orderBean->ship_to_address = $accBean->shipping_address_street;
			$orderBean->ship_to_address_city = $accBean->shipping_address_city;
			$orderBean->ship_to_address_country = $accBean->shipping_address_country;
			$orderBean->ship_to_address_postalcode = $accBean->shipping_address_postalcode;
			$orderBean->ship_to_address_state = $accBean->shipping_address_state;
			$orderBean->save();
			
			if($bean->opportunity_type == "Council")
			{
				//Change the Contact type of the Contact that is related to Opportunity as Council Member
				
				$contact->contact_type_c = "Council_Member";
				$contact->save();
				
				//Create a Council Member record
				$councilMem = BeanFactory::newBean('Bhea_Council_Members');
				$councilMem->salutation = $contact->salutation;
				$councilMem->first_name = $contact->first_name;
				$councilMem->last_name = $contact->last_name;
				$councilMem->title = $contact->title;
				$councilMem->phone_work = $contact->phone_work;
				$councilMem->phone_mobile = $contact->phone_mobile;
				$councilMem->familiar_name = $contact->familiar_name_c;
				$councilMem->department = $contact->department;
				$councilMem->member_from = $bean->actual_close_date_c;
				$councilMem->save();
				
				//Create a Council Membership record
				$c_mem_ship = BeanFactory::newBean('Bhea_Council_Memberships');
				$c_mem_ship->name = $bean->name."- Memberships";
				$c_mem_ship->discount_c = $bean->discount_c;
				$c_mem_ship->final_membership_fee_c = $bean->final_membership_fee_c;
				$c_mem_ship->start_date = $bean->actual_close_date_c;
				$c_mem_ship->membership_fee = $bean->membership_fee_c;
				$c_mem_ship->save();
				
				//Change Account Type of related Account to Member
				$accBean->account_type = "member";
				$accBean->save();
				
				
				//Linking Records
				$accBean->load_relationship('accounts_bhea_council_members_1');
				$accBean->accounts_bhea_council_members_1->add($councilMem->id);
				
				$accBean->load_relationship('accounts_bhea_council_memberships_1');
				$accBean->accounts_bhea_council_memberships_1->add($c_mem_ship->id);
				
				$councilMem->load_relationship('bhea_council_members_bhea_council_memberships_1');
				$councilMem->bhea_council_members_bhea_council_memberships_1->add($c_mem_ship->id);
				
				
				$grp->load_relationship('bhea_councils_bhea_council_members_1');
				$grp->bhea_councils_bhea_council_members_1->add($councilMem->id);
				
				$grp->load_relationship('bhea_councils_bhea_council_memberships_1');
				$grp->bhea_councils_bhea_council_memberships_1->add($c_mem_ship->id);
				
				$accBean->load_relationship('accounts_bhea_orders_1');
				$accBean->accounts_bhea_orders_1->add($orderBean->id);
				
				$councilMem->load_relationship('bhea_council_members_bhea_orders_1');
				$councilMem->bhea_council_members_bhea_orders_1->add($orderBean->id);
				
				$c_mem_ship->load_relationship('bhea_council_memberships_bhea_orders_1');
				$c_mem_ship->bhea_council_memberships_bhea_orders_1->add($orderBean->id);
				
				$contact->load_relationship('opportunities');
				$contact->opportunities->add($bean->id);
			}
			
	/**
	 * @File: after_save_logic_hook.php
	 * @Author: Meghana A
	 * @Date: 12/12/2013
	 * @Purpose: This file is used to create a record in the Membership module upon the closure of the
	 * opportunity and the membership
	 */

			if($bean->opportunity_type == "membership")
			{
					$opp_fee = $bean->membership_fee_c;
					$opp_discount = $bean->discount_c;
					$opp_final_fee = $bean->final_membership_fee_c;
					
					$opp_type = $bean->opportunity_type;
					$opp_subtype = $bean->subtype_c;
					$opp_rel_field = $bean->bhea_member_levels_opportunities_1bhea_member_levels_ida;
					
					$opp_act_close_date = $bean->actual_close_date_c;
					$opp_company_name = $bean->account_id;
					
					
					$mem_period = $mem_lvl_obj->mem_period;
					

					global $app_list_strings;
					$key = $app_list_strings['mem_period_list'][$mem_period];
					$opp_type_key = $app_list_strings['opportunity_type_list'][$opp_type];
					$opp_subtype_key = $app_list_strings['subtype_list'][$opp_subtype];
					/*
					 * Create a record in Memberships module
					 */
					$module = "Bhea_Memberships";
					$obj = BeanFactory::newBean($module);
					$obj->mem_fee = $opp_fee;
					$obj->discount_c = $opp_discount;
					$obj->final_mem_fee_c = $opp_final_fee;
					$obj->mem_period = $key;
				
					$obj->bhea_member_levels_bhea_memberships_1bhea_member_levels_ida = $opp_rel_field;
					
					$obj->start_date = $opp_act_close_date;
					$obj->mem_type = $opp_subtype_key;
					$obj->accounts_bhea_memberships_1accounts_ida = $opp_company_name;
					/*
					 * Trim the type and subtype
					 * in order to use it as name
					 */
					$opp_type_key_three = substr($opp_type_key,0,3);
					$opp_subtype_key_three = substr($opp_subtype_key,0,3);
			
					$obj->name = $accBean->	company_alias_c."-".$opp_type_key_three."-".$opp_subtype_key_three;
					
					//$query = "SELECT membership_code_c FROM bhea_memberships_cstm order by membership_code_c desc limit 0,1";
					//$result=$db->query($query);
					//$res_array=$db->fetchByAssoc($result);
					//$auto_id=$res_array['membership_code_c'];
					//$obj->member_code_c = $accBean->company_alias_c."-ME-".$auto_id;
					
					$obj->save();	

					$obj->load_relationship('bhea_memberships_bhea_orders_1');
					$obj->bhea_memberships_bhea_orders_1->add($orderBean->id);
					
			}
		}	
	}
}
?>
