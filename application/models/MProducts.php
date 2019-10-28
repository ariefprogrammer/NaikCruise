<?php defined('BASEPATH') OR exit ('No direct script access allowed');


/**
 * 
 */
class MProducts extends CI_Model
{
	
	public function save($post)
	{
		//$code = $this->db->escape($post["code"]);
		$product_name = $this->db->escape($post["product_name"]);
		$product_code = $this->db->escape($post["product_code"]);
		$position_order = $this->db->escape($post["position_order"]);
		$product_slug = $this->db->escape($post["product_slug"]);
		$product_collection = $this->db->escape($post["product_collection"]);
		$product_maximum_child_age = $this->db->escape($post["product_maximum_child_age"]);
		$product_highlight_date = $this->db->escape($post["product_highlight_date"]);
		$product_total_days = $this->db->escape($post["product_total_days"]);
		$product_total_nights = $this->db->escape($post["product_total_nights"]);
		$product_starting_price = $this->db->escape($post["product_starting_price"]);
		$product_price_info = $this->db->escape($post["product_price_info"]);
		$product_transportation = $this->db->escape($post["product_transportation"]);
		$product_accomodation = $this->db->escape($post["product_accomodation"]);
		$product_included = $this->db->escape($post["product_included"]);
		$product_excluded = $this->db->escape($post["product_excluded"]);
		$product_terms = $this->db->escape($post["product_terms"]);
		$product_thumbnail = $this->db->escape($post["product_thumbnail"]);
		$product_flyer = $this->db->escape($post["product_flyer"]);
		$product_status = $this->db->escape($post["product_status"]);

		$sql = $this->db->query("INSERT INTO tb_products VALUES (NULL, $product_name, $product_code, $position_order, $product_slug, $product_collection, $product_maximum_child_age, $product_highlight_date, $product_total_days, $product_total_nights, $product_starting_price, $product_price_info, $product_transportation, $product_accomodation, product_included, $product_excluded, $product_terms, $product_thumbnail, product_flyer, $product_status)");

		if($sql){
			return true;
		}else{
		return false;
		}
	}
}
?>