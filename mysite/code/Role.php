<?php
/**
 * Created by PhpStorm.
 * User: TheresaPatricia
 * Date: 5/08/16
 * Time: 1:39 PM
 */

class Role extends DataObject {
    private static $db = array(
        'Title' => 'Varchar(100)',
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