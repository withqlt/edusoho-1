<?php
/**
 * User: retamia
 * Date: 2016/10/19
 * Time: 14:17
 */

namespace Biz;


use Codeages\Biz\Framework\Dao\GeneralDaoImpl;

class BaseService extends \Codeages\Biz\Framework\Service\BaseService
{
    /**
     * @param $alias
     * @return GeneralDaoImpl
     */
    protected function createDao($alias)
    {
        return $this->biz->dao($alias);
    }

    protected function getCurrentUser()
    {
        return $this->biz['user'];
    }

}