<?php

/**

 * Description of Common

 *

 * @author CHUYEN

 */

require_once APPPATH . 'libraries/REST_Controller.php';


use Restserver\Libraries\REST_Controller;


class Contact_api extends REST_Controller {

    function contacts_get() {

        $input = array();

        $input['where'] = array('id' => '6001');

        $contacts = $this->contacts_model->load_all($input);

        $this->response(json_encode($contacts), 200);

    }

    function add_contact_post() {

        $input = $this->input->post();

        if (!empty($input) && !isset($input['contact_cc'])) {

            /* Lọc thông tin contact */

            $param['name'] = isset($input['name']) ? $input['name'] : '';

            $param['name'] = trim(str_replace('[RGT_FROM_MOBILE]', '', $param['name']));

            $param['phone'] = isset($input['phone']) ? trim($input['phone']) : '';

            $email = isset($input['email']) ? $input['email'] : '';

            $param['email'] = trim(str_replace('NO_PARAM@gmail.com', '', $email));

            if (trim($param['phone']) == '') {

                die;

            }

            $address = isset($input['dia_chi']) ? $input['dia_chi'] : '';

            $address .= ' ';

            $address .= isset($input['quan']) ? $input['quan'] : '';

            $address .= ' ';

            $address .= isset($input['tinh']) ? $input['tinh'] : '';

            $address .= isset($input['street']) ? $input['street'] : '';

            $address .= isset($input['address']) ? $input['address'] : '';

            $address .= isset($input['select_combo']) ? ' - ' . $input['select_combo'] : '';

            $param['address'] = trim(str_replace('NO_PARAM', '', $address));

			// $t = stripos($param['address'], 'mh');
			// if ($t === false) {
			// 	$param['is_consultant'] = 0;
			// 	$param['source_id'] = 1;
			// } else {
			// 	$param['is_consultant'] = 1;
			// 	$param['source_id'] = 2;
			// }

			if (stripos($param['address'], 'mh') != 0) {
				$param['is_consultant'] = 1;
				$param['source_id'] = 2;
			} elseif (stripos($param['address'], 'ib') != 0) {
				$param['is_consultant'] = 1;
				$param['source_id'] = 6;
			} elseif (stripos($param['address'], 'cb') != 0) {
				$param['is_consultant'] = 1;
				$param['source_id'] = 4;
			} else {
				$param['is_consultant'] = 0;
				$param['source_id'] = 1;
			}
			
			if (isset($input['source_id'])) {
				$param['source_id'] = $input['source_id'];
			}
			
            /*$param['is_consultant'] = (strpos($param['address'], 'tv') == false) ? 0 : 1;*/
			
			$param['brand_id'] = isset($input['brand_id']) ? $input['brand_id'] : 0;

            $param['course_code'] = isset($input['course_code']) ? $input['course_code'] : '';
			
			$course_code_search = array('SK701', 'SK703', 'SK1101', 'SK203', 'SK1108');
			
			if (in_array($param['course_code'], $course_code_search)) {
				$param['brand_id'] = 2;
			}
			
            $param['price_purchase'] = isset($input['price_purchase']) ? $input['price_purchase'] : '';

            $param['matrix'] = isset($input['matrix']) ? $input['matrix'] : '';

            $param['payment_method_rgt'] = isset($input['payment_method_rgt']) ? $input['payment_method_rgt'] : 1;

            if (isset($input['cod_status_id'])) {

                $param['cod_status_id'] = $input['cod_status_id'];

                if ($input['cod_status_id'] == '3') {

                    $param['date_receive_lakita'] = time();

                }

            }

            if (isset($input['call_status_id'])) {

                $param['call_status_id'] = $input['call_status_id'];
				
				if($input['call_status_id'] == '4'){
					$param['date_last_calling'] = time();
				}
            }

            if (isset($input['ordering_status_id'])) {

                $param['ordering_status_id'] = $input['ordering_status_id'];
				if($input['ordering_status_id'] == '4'){
					$param['date_confirm'] = time();
				}
            }

            /*

             * MOL

             */

            if (isset($input['link_id'])) {

				$link_num =	intval($input['link_id']);

				switch ($link_num) {

					case 969:

						$input['link_id']=1243;

						break;

				   case 970:

						$input['link_id']=1244;

						break;

				   case 971:

						$input['link_id']=1245;

						break;

						case 972:

						$input['link_id']=1246;

						break;

						case 973:

						$input['link_id']=1247;

						break;

						case 937:

						$input['link_id']=1211;

						break;

						case 938:

						$input['link_id']=1212;

						break;

						case 939:

						$input['link_id']=1213;

						break;

						case 940:

						$input['link_id']=1214;

						break;

						case 941:

						$input['link_id']=1215;

						break;case 942:

						$input['link_id']=1216;

						break;

						case 943:

						$input['link_id']=1217;

						break;

						case 944:

						$input['link_id']=1218;

						break;

						case 945:

						$input['link_id']=1219;

						break;

						case 946:

						$input['link_id']=1220;

						break;

						case 947:

						$input['link_id']=1221;

						break;

						case 948:

						$input['link_id']=1222;

						break;

						case 949:

						$input['link_id']=1223;

						break;

						case 950:

						$input['link_id']=1224;

						break;

						case 951:

						$input['link_id']=1225;

						break;

						case 952:

						$input['link_id']=1226;

						break;

						case 953:

						$input['link_id']=1227;

						break;

						case 954:

						$input['link_id']=1228;

						break;

						case 955:

						$input['link_id']=1229;

						break;

						case 956:

						$input['link_id']=1230;

						break;

						case 957:

						$input['link_id']=1231;

						break;

						case 958:

						$input['link_id']=1232;

						break;

						case 959:

						$input['link_id']=1233;

						break;

						case 960:

						$input['link_id']=1234;

						break;

						case 961:

						$input['link_id']=1235;

						break;

						case 962:

						$input['link_id']=1236;

						break;

						case 963:

						$input['link_id']=1237;

						break;

						case 964:

						$input['link_id']=1238;

						break;

						case 965:

						$input['link_id']=1239;

						break;

						case 966:

						$input['link_id']=1240;

						break;

						case 967:

						$input['link_id']=1241;

						break;

						case 968:

						$input['link_id']=1242;

						break;

					default:

				}

                $this->load->model('link_model');

                $input_link = array();

                $input_link['where'] = array('id' => $input['link_id']);

                $links = $this->link_model->load_all($input_link);

                if (!empty($links)) {

                    $param['marketer_id'] = $links[0]['marketer_id'];

                    $param['channel_id'] = $links[0]['channel_id'];

                    $param['campaign_id'] = $links[0]['campaign_id'];

                    $param['adset_id'] = $links[0]['adset_id'];

                    $param['ad_id'] = $links[0]['ad_id'];

                    $param['landingpage_id'] = $links[0]['landingpage_id'];

                    $param['link_id'] = $links[0]['id'];

                    $param['affiliate_id'] = $links[0]['affiliate_id'];
					
					switch($links[0]['marketer_id']){
						case 174:
							$param['sale_staff_id'] = 175;
							break;
						default :
							$param['sale_staff_id'] = 0;
					}

					if ($param['brand_id'] == 5) {
						$param['sale_staff_id'] = 206;
						$param['date_handover'] = time();
					}
					
                    //xác định contact từ lakita bán hay ngoài bán

                    $this->load->model('staffs_model');

                    $this->load->model('channel_model');

                    $input = array();

                    $input['where']['id'] = $links[0]['marketer_id'];

                    $staff = $this->staffs_model->load_all($input);


                    $input = array();

                    $input['where']['id'] = $links[0]['channel_id'];

                    $channel = $this->channel_model->load_all($input);

                    if (!empty($staff) && !empty($channel)) {

                        if (($staff[0]['source_sale_id'] == 2 && $channel[0]['source_sale_id'] == 1) || ($staff[0]['source_sale_id'] == 1 && $channel[0]['source_sale_id'] == 2)) {

                            $param['source_sale_id'] = 2;

                        } else {

                            $param['source_sale_id'] = 1;

                        }

                    } else {

                        $param['source_sale_id'] = 1;

                    }
					if(isset($input['source_sale_id'])){
						$param['source_sale_id'] = $input['source_sale_id'];
					}

                }

            }else{
				$param['channel_id'] = (isset($input['channel_id'])&&!empty($input['channel_id']))?$input['channel_id']:'';
				//$param['source_id'] = (isset($input['source_id'])&&!empty($input['source_id']))?$input['source_id']:1;
			}

			if(isset($input['source_sale_id'])){
				$param['source_sale_id'] = $input['source_sale_id'];
			}

            if (isset($input['type-combo'])) {

                $param['course_code'] = $input['type-combo'];

            }

            $param['date_rgt'] = time();

            $param['last_activity'] = time();

            $param['duplicate_id'] = $this->_find_dupliacte_contact($param['phone'], $param['course_code']);
			
			if (isset($input['id_lakita'])) {

                $param['id_lakita'] = $input['id_lakita'];
				$param['date_active'] = time();
            }
			
            $this->contacts_model->insert_from_mol($param);
			$this->load->model('contacts_backup_model');
			$this->contacts_backup_model->insert_from_mol($param);

            $marketerId = isset($param['marketer_id']) ? $param['marketer_id'] : '0';

            $data2 = [];

            $title = 'Có 1 contact mới đăng ký';

            $message = 'Click để xem ngay';

            require_once APPPATH . 'libraries/Pusher.php';

            $options = array(

                'cluster' => 'ap1',

                'encrypted' => true

            );

            $pusher = new Pusher(

                    '32b339fca68db27aa480', '32f6731ad5d48264c579', '490390', $options

            );

            $inputMkt = [];

            $inputMkt['where'] = array('id' => $marketerId);

            $marketer = $this->staffs_model->load_all($inputMkt);

            if ($marketer[0]['targets'] != '') {

                $inputToday = [];

                $inputToday['select'] = 'id';

                $inputToday['where'] = array('marketer_id' => $marketerId, 'date_rgt >' => strtotime(date('d-m-Y')), 'is_hide' => '0');

                $today = $this->contacts_model->load_all($inputToday);

                $totalC3 = count($today);


                $data2['title'] = "C3 số " . $totalC3 . " của " . $marketer[0]['short_name'] . " hôm nay";


                if ($totalC3 < $marketer[0]['targets']) {

                    $data2['message'] = "Bạn còn " . ($marketer[0]['targets'] - $totalC3) . " C3 nữa là đạt mục tiêu hôm nay!";

                } else if ($totalC3 == $marketer[0]['targets']) {

                    $data2['message'] = "Xin chúc mừng, bạn đã đạt mục tiêu hôm nay. Cố gắng phát huy bạn nhé <3 <3 <3";

                } else {

                    $data2['message'] = "Xin chúc mừng, bạn đã vượt mục tiêu hôm nay. Cố gắng phát huy bạn nhé <3 <3 <3";

                }

                $title = $data2['title'];

                $message = $data2['message'];

            } else {

                $data2['title'] = 'Có contact mới đăng ký';

                $data2['message'] = 'Click để xem ngay';

            }

            $data2['image'] = $this->staffs_model->GetStaffImage($marketerId);

            $pusher->trigger('my-channel', 'notice', $data2);


            $url = 'https://crm.lakita.vn';

            $apiToken = 'a7ea7dd9fe04ee2fe9745bc930e15213';

            $curlUrl = 'https://pushcrew.com/api/v1/send/all';

            //set POST variables

            $fields = array(

                'title' => $title,

                'message' => $message,

                'url' => $url

            );

            $httpHeadersArray = Array();

            $httpHeadersArray[] = 'Authorization: key=' . $apiToken;

            //open connection

            $ch = curl_init();

            //set the url, number of POST vars, POST data

            curl_setopt($ch, CURLOPT_URL, $curlUrl);

            curl_setopt($ch, CURLOPT_POST, true);

            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

            curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($fields));

            curl_setopt($ch, CURLOPT_HTTPHEADER, $httpHeadersArray);

            //execute post

            curl_exec($ch);

        }

    }


    function update_id_lakita_post() {

        $post = $this->input->post();

        $input['select'] = 'id';

        $input['where'] = array('email' => $post['email'],

            'phone' => $post['phone'],

            'course_code' => $post['course_code'],

            'call_status_id' => _DONG_Y_MUA_,

            'duplicate_id' => '',

            'is_hide' => '0',

            'id_lakita' => '');


        $contact = $this->contacts_model->load_all($input);

        if (empty($contact)) {

            $input['where'] = array(

            	'phone' => $post['phone'],

                'course_code' => $post['course_code'],

                'call_status_id' => _DONG_Y_MUA_,

                'duplicate_id' => '',

                'is_hide' => '0',

                'id_lakita' => ''

			);

            $contact = '';

            $contact = $this->contacts_model->load_all($input);

            if (empty($contact)) {

                $input['where'] = array('email' => $post['email'],

                    'course_code' => $post['course_code'],

                    'call_status_id' => _DONG_Y_MUA_,

                    'duplicate_id' => '',

                    'is_hide' => '0',

                    'id_lakita' => '');

                $contact = '';

                $contact = $this->contacts_model->load_all($input);

                if (!empty($contact)) {

                    $where = array('id' => $contact[0]['id']);

                    $data = array('id_lakita' => $post['id_lakita'], 'date_active' => $post['date_active'],'customer_care_staff_id' => '');

                    $this->contacts_model->update($where, $data);

                }

            } else {

                $where = array('id' => $contact[0]['id']);

                $data = array('id_lakita' => $post['id_lakita'], 'date_active' => $post['date_active'],'customer_care_staff_id' => '');

                $this->contacts_model->update($where, $data);

            }

        } else {

            $where = array('id' => $contact[0]['id']);

            $data = array('id_lakita' => $post['id_lakita'], 'date_active' => $post['date_active'],'customer_care_staff_id' => '');

            $this->contacts_model->update($where, $data);

        }

    }


    function add_c2_post() {

        $input = $this->input->post();

        if (isset($input['link_id'])) {

            $this->load->model('c2_model');

            /*

             * Nếu người dùng F5 trong vòng 2 phút thì không tính là C2

             */

            $input_c2_exist = array();

            $input_c2_exist['select'] = 'id';

            $input_c2_exist['where'] = array('link_id' => $input['link_id'], 'ip' => $input['ip'],

                'date_rgt >=' => time() - 120);

            $input_c2_exist['limit'] = array('1', '0');

            $c2_exist = $this->c2_model->load_all($input_c2_exist);

            if (empty($c2_exist)) {

                $this->load->model('link_model');

                $input_link = array();

                $input_link['where'] = array('id' => $input['link_id']);

                $links = $this->link_model->load_all($input_link);

                if (!empty($links)) {

                    $param['marketer_id'] = $links[0]['marketer_id'];

                    $param['channel_id'] = $links[0]['channel_id'];

                    $param['campaign_id'] = $links[0]['campaign_id'];

                    $param['adset_id'] = $links[0]['adset_id'];

                    $param['ad_id'] = $links[0]['ad_id'];

                    $param['landingpage_id'] = $links[0]['landingpage_id'];

                    $param['link_id'] = $links[0]['id'];

                }

                $param['date_rgt'] = time();

                $param['ip'] = $input['ip'];

                $this->c2_model->insert($param);

            }

        }

    }

    function update_contact_active_lakita_post() {

        $post = $this->input->post();

        if (!empty($post)) {

            $where = array('phone' => $post['phone'], 'course_code' => $post['course_code']);

            $data = array('date_active' => time());

            $this->contacts_model->update($where, $data);

        }

        $this->response('success', 200);

    }
	
	function update_account_active_post() {
		$post = $this->input->post();
		
		$where = $input['where'] = array('id_lakita' => $post['id_lakita']);
		
		$data = array(
			'account_active' => 1,
			'date_active' => time()
		);
		
		$active_cts = $this->contacts_model->load_all($input);
		
		if (empty($active_cts)) {
			$where = array('phone' => $post['phone']);
			$this->contacts_model->update($where, $data);
		} else {
			$this->contacts_model->update($where, $data);
		}
		
		$this->response('success', 200);
	}

    private function _find_dupliacte_contact($phone = '', $course_code = '') {

        $dulicate = 0;

        $input = array();

        $input['select'] = 'id';

        $input['where'] = array(

            'phone' => $phone,

            'course_code' => $course_code,

            'is_hide' => '0'

        );

        $input['order'] = array('id', 'ASC');

        $input['limit'] = array('1', '0');

        $rs = $this->contacts_model->load_all($input);

        if (count($rs) > 0) {

            $dulicate = $rs[0]['id'];

        }

        return $dulicate;

    }

	function check_api_post() {
		$this->response('success_quang', 200);
	}

}

