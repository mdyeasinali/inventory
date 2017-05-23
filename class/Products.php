<?php

class Products extends Db
{
    public function add_products($p_pt, $pd, $pro_img, $ex_date, $pon, $pp, $pro_st, $ps, $token)
    {

        $pro_img = $this->image($pro_img);
        if ($pro_img == 10) {
            $this->error = 'Image couldnt upload!';
        }
        $seo_url = $this->get_clean_url($p_pt);
        $data = array($p_pt, $pd, $pro_img, $ex_date, $pon, $seo_url, $pp, $pro_st, $ps);
        $this->query = $this->handeller->prepare("INSERT INTO `products`(`pro_title`, `pro_dis`, `pro_img`,`pro_owner_name`, `pro_publish_date`,`pro_ex_date`,`pro_price`,`pro_status`) VALUES(?, ?, ?, ?, NOW(),?, ?, ?);");
        if ($this->query->execute($data) && $pro_img != 10) {
            return $this->url_return(array('products.php', 'Properties has been added', 'success', $token));
        } else {
            return $this->url_return(array('add_products.php', 'Properties not added ' . $sl_img1 . $this->error, 'error', $token));
        }
    }

    public function get_ex_noti($ex)
    {
        $start = date('Y-m-d');
        $ex_date = substr($ex, 6, 4) . '-' . substr($ex, 0, 2) . '-' . substr($ex, 3, 2);
        $end = $ex_date;
        if ($start < $end) {
            return '1';
        } else {
            return '0';
        }
    }

    public function show_all_products()
    {
        $this->arrays = $this->handeller->query("SELECT * FROM `products`");
        $row = $this->arrays;
        $return = array();
        foreach ($row as $c) {
            $p = array();
            $user_id = $c['pro_user_id'];
            $ex_value = $this->get_ex_noti($c['pro_ex_date']);
            $user = $this->handeller->query("SELECT * FROM `users` WHERE `user_id`='$user_id'");
            $u_info = $user->fetch(PDO::FETCH_ASSOC);
            $publisher_name = $u_info['user_first_name'] . ' ' . $u_info['user_last_name'];
            $p['id'] = $c['pro_id'];
            $p['pro_img'] = $c['pro_img'];
            $p['title'] = $c['pro_title'];
            $p['publisher_name'] = $publisher_name;
            $p['pub_date'] = $c['pro_publish_date'];

            if ($c['pro_status'] == 1) {
                $p['pro_status'] = '<span class="label label-success">Published</span>';
            } else {
                $p['pro_status'] = '<span class="label label-danger">Not Published</span>';
            }
            array_push($return, $p);
        }

        return $return;
    }

    public function delect_property($tkn)
    {
        foreach ($_POST['check_list'] as $check) {
            $this->arrays3 = $this->handeller->query("SELECT * FROM `products` WHERE pro_id ='$check'");
            $row = $this->arrays3->fetch(PDO::FETCH_ASSOC);
            unlink($row['pro_img']);
            $this->arrays = $this->handeller->prepare("DELETE FROM `products` WHERE pro_id = ? ");
            if ($this->arrays->execute(array($check))) {
                $this->url_return(array('products.php', 'products has been Deleted', 'success', $tkn));
            } else {
                $this->url_return(array('products.php', 'products has Not Deleted', 'error', $tkn));
            }
        }

    }

    public function edit_show_property($pro_id)
    {
        $return = array();
        $row = $this->handeller->query("SELECT * FROM `products` WHERE `pro_id` = '$pro_id'");
        foreach ($row as $c) {
            $p = array();
            $p['id'] = $c['pro_id'];
            $p['pro_title'] = $c['pro_title'];
            $p['dis'] = $c['pro_dis'];
            $p['owner_name'] = $c['pro_owner_name'];

            $p['ex_date'] = $c['pro_ex_date'];
            $p['price'] = $c['pro_price'];
            $p['pro_img'] = $c['pro_img'];


            if ($c['pro_status'] == 1) {
                $p['pro_status'] = 'checked';
            } else {
                $p['pro_status'] = '';
            }


            $p['pro_user_id'] = $c['pro_user_id'];
            array_push($return, $p);
        }

        return $return;
    }

    public function update_properties($p_pt, $pd, $pro_img, $ex_date, $pon, $pp, $pro_st, $ps, $pro_id, $token)
    {

        if ($_FILES[$pro_img]["size"] == 0) {
            $p_im = $hed_image;
        } else {
            $p_im = $this->image($pro_img);
            if ($p_im == 10) {
                $this->error = 'Image couldnt upload!';
            }
        }

        $data = array($p_pt, $pd, $pro_img, $ex_date, $pon, $pp, $pro_st, $ps, $pro_id);
        $this->arrays = $this->handeller->prepare("UPDATE `products` SET `pro_title`= ?,`pro_dis`= ?,`pro_owner_name`= ? ,`pro_ex_date`= ? ,`pro_price`= ?,`pro_status`= ? WHERE `pro_id` = ? ");
        if ($this->arrays->execute($data)) {
            $this->url_return(array('products.php', 'products has been Update', 'success', $token));
        } else {
            $this->url_return(array('edit_products.php', 'products not Update ' . $this->error, 'error', $token));
        }
    }


}

?>