<?php
/**
 * Created by PhpStorm.
 * User: pr0x
 * Date: 10/05/2015
 * Time: 1:37
 */
require_once CS_MVC_PATH_MODEL . '/ExcursionModel.php';
class SiteViewModel extends ViewModel {

    /**
     * @return ExcursionModel
     */
    function getAllExcursiones() {
        $items = ExcursionRepo::create()->all(0,null,"likes DESC");
        return $items;
    }
    function getAllCircuitos($cant=2) {
        $items = ExcursionRepo::create()->allBy(array(
            'TipoExcursion_id'=>'1'
        ),0,$cant,"likes DESC");
        return $items;
    }
    function getAllOverNight($cant=2) {
        $items = ExcursionRepo::create()->allBy(array(
            'TipoExcursion_id'=>'2'
        ),0,$cant,"likes DESC");
        return $items;
    }
    function getAllDayTours($cant=2) {
        $items = ExcursionRepo::create()->allBy(array(
            'TipoExcursion_id'=>'3'
        ),0,$cant,"likes DESC");
        return $items;
    }

}