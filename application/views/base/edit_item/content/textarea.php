<tr>
    <td class="text-right">
        <?php        switch ($key) {            case 'clock_plugin':                echo 'Đồng hồ đếm ngược';                break;            case 'form_plugin':                echo 'Form đăng ký';                break;            case 'fb_cmt_plugin':                echo 'Comment FB';                break;            case 'header_plugin':                echo 'Thành phần header';                break;            default :                echo h_find_name_display($key, $this->list_view);                break;        }        ?>
    </td>
    <td>
        <div class="form-group">
            <textarea class="form-control" rows="5" name="edit_<?php echo $key; ?>"> <?php echo $row[$key];?></textarea>
        </div>
    </td>
</tr>

