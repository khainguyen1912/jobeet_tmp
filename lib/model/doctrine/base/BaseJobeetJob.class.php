<?php

/**
 * BaseJobeetJob
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $category_id
 * @property string $type
 * @property string $company
 * @property string $logo
 * @property string $url
 * @property string $position
 * @property string $location
 * @property string $description
 * @property string $how_to_apply
 * @property string $token
 * @property boolean $is_public
 * @property boolean $is_activated
 * @property string $email
 * @property timestamp $expires_at
 * @property JobeetCategory $JobeetCategory
 * 
 * @method integer        getCategoryId()     Returns the current record's "category_id" value
 * @method string         getType()           Returns the current record's "type" value
 * @method string         getCompany()        Returns the current record's "company" value
 * @method string         getLogo()           Returns the current record's "logo" value
 * @method string         getUrl()            Returns the current record's "url" value
 * @method string         getPosition()       Returns the current record's "position" value
 * @method string         getLocation()       Returns the current record's "location" value
 * @method string         getDescription()    Returns the current record's "description" value
 * @method string         getHowToApply()     Returns the current record's "how_to_apply" value
 * @method string         getToken()          Returns the current record's "token" value
 * @method boolean        getIsPublic()       Returns the current record's "is_public" value
 * @method boolean        getIsActivated()    Returns the current record's "is_activated" value
 * @method string         getEmail()          Returns the current record's "email" value
 * @method timestamp      getExpiresAt()      Returns the current record's "expires_at" value
 * @method JobeetCategory getJobeetCategory() Returns the current record's "JobeetCategory" value
 * @method JobeetJob      setCategoryId()     Sets the current record's "category_id" value
 * @method JobeetJob      setType()           Sets the current record's "type" value
 * @method JobeetJob      setCompany()        Sets the current record's "company" value
 * @method JobeetJob      setLogo()           Sets the current record's "logo" value
 * @method JobeetJob      setUrl()            Sets the current record's "url" value
 * @method JobeetJob      setPosition()       Sets the current record's "position" value
 * @method JobeetJob      setLocation()       Sets the current record's "location" value
 * @method JobeetJob      setDescription()    Sets the current record's "description" value
 * @method JobeetJob      setHowToApply()     Sets the current record's "how_to_apply" value
 * @method JobeetJob      setToken()          Sets the current record's "token" value
 * @method JobeetJob      setIsPublic()       Sets the current record's "is_public" value
 * @method JobeetJob      setIsActivated()    Sets the current record's "is_activated" value
 * @method JobeetJob      setEmail()          Sets the current record's "email" value
 * @method JobeetJob      setExpiresAt()      Sets the current record's "expires_at" value
 * @method JobeetJob      setJobeetCategory() Sets the current record's "JobeetCategory" value
 * 
 * @package    jbeet
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseJobeetJob extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('jobeet_job');
        $this->hasColumn('category_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('type', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('company', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));
        $this->hasColumn('logo', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('url', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('position', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));
        $this->hasColumn('location', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));
        $this->hasColumn('description', 'string', 4000, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 4000,
             ));
        $this->hasColumn('how_to_apply', 'string', 4000, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 4000,
             ));
        $this->hasColumn('token', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'unique' => true,
             'length' => 255,
             ));
        $this->hasColumn('is_public', 'boolean', null, array(
             'type' => 'boolean',
             'notnull' => true,
             'default' => 1,
             ));
        $this->hasColumn('is_activated', 'boolean', null, array(
             'type' => 'boolean',
             'notnull' => true,
             'default' => 0,
             ));
        $this->hasColumn('email', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));
        $this->hasColumn('expires_at', 'timestamp', null, array(
             'type' => 'timestamp',
             'notnull' => true,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('JobeetCategory', array(
             'local' => 'category_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}