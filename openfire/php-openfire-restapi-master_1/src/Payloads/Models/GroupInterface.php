<?php
/**
 * OpenFireRestAPI is based entirely on official documentation of the REST API
 * Plugin and you can extend it by following the directives of the documentation
 *
 * For the full copyright and license information, please read the LICENSE
 * file that was distributed with this source code. For the full list of
 * contributors, visit https://github.com/gnello/PHPOpenFireRestAPI/contributors
 *
 * @author Luca Agnello <luca@gnello.com>
 * @link https://www.igniterealtime.org/projects/openfire/plugins/restapi/readme.html
 */

namespace Gnello\OpenFireRestAPI\Payloads\Models;

/**
 * Payload of Group related REST Endpoint
 * Interface GroupInterface
 * @package Gnello\OpenFireRestAPI\Payloads\Models
 * @link http://www.igniterealtime.org/projects/openfire/plugins/restapi/readme.html#group
 */
interface GroupInterface
{
    /**
     * @param $name
     */
    public function setName($name);

    /**
     * @param $description
     */
    public function setDescription($description);

    /**
     * @param $admins
     */
    public function setAdmins($admins);

    /**
     * @param $members
     */
    public function setMembers($members);

    /**
     * @param $groupname
     */
    public function setGroupname($groupname);

    /**
     * @return string
     */
    public function getName();

    /**
     * @return string
     */
    public function getDescription();

    /**
     * @return string
     */
    public function getAdmins();

    /**
     * @return string
     */
    public function getMembers();

    /**
     * @return string
     */
    public function getGroupname();
}