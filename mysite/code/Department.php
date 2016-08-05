<?php
/**
 * Created by PhpStorm.
 * User: TheresaPatricia
 * Date: 5/08/16
 * Time: 1:38 PM
 */

class Department extends DataObject {
    private static $db = array(
        'Title' => 'Varchar(100)',
        'Floor' => 'Int(2)',
    );
    private static $has_many = array(
        'Staff' => 'StaffPage',
    );
    public function canView($member = null) {
        return Permission::check('CMS_ACCESS_CMSMain');
    }
    public function canEdit($member = null) {
        return Permission::check('CMS_ACCESS_CMSMain');
    }
    public function canDelete($member = null) {
        return Permission::check('CMS_ACCESS_CMSMain');
    }
    public function canCreate($member = null) {
        return Permission::check('CMS_ACCESS_CMSMain');
    }
}