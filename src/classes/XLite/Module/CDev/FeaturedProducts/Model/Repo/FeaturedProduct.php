<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * LiteCommerce
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to licensing@litecommerce.com so we can send you a copy immediately.
 *
 * @category   LiteCommerce
 * @package    XLite
 * @subpackage Model
 * @author     Creative Development LLC <info@cdev.ru>
 * @copyright  Copyright (c) 2011 Creative Development LLC <info@cdev.ru>. All rights reserved
 * @license    http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @version    GIT: $Id$
 * @link       http://www.litecommerce.com/
 * @see        ____file_see____
 * @since      1.0.0
 */

namespace XLite\Module\CDev\FeaturedProducts\Model\Repo;

/**
 * Featured Product repository
 *
 * @package XLite
 * @see     ____class_see____
 * @since   1.0.0
 */
class FeaturedProduct extends \XLite\Model\Repo\ARepo
{
    /**
     * Default 'order by' field name
     *
     * @var    string
     * @access protected
     * @see    ____var_see____
     * @since  1.0.0
     */
    protected $defaultOrderBy = 'order_by';

    /**
     * Find by type 
     * 
     * @param integer $categoryId Category ID
     *  
     * @return array
     * @access public
     * @see    ____func_see____
     * @since  1.0.0
     */
    protected function findByCategoryId($categoryId)
    {
        if (!is_numeric($categoryId) || $categoryId <= 0) {
            $categoryId = \XLite\Core\Database::getRepo('\XLite\Model\Category')->getRootCategoryId();
        }

        return $this->defineByCategoryIdQuery($categoryId)->getResult();
    }

    /**
     * Define query builder for findByCategoryId()
     * 
     * @param integer $categoryId Category ID
     *  
     * @return \Doctrine\ORM\QueryBuilder
     * @access protected
     * @see    ____func_see____
     * @since  1.0.0
     */
    protected function defineByCategoryIdQuery($categoryId)
    {
        return $this->createQueryBuilder()
            ->andWhere('f.category = :categoryId')
            ->setParameter('categoryId', $categoryId);
    }

    /**
     * Get featured products list
     *
     * @param integer $categoryId Category ID
     * 
     * @return array(\XLite\Module\CDev\FeaturedProducts\Model\FeaturedProduct) Objects
     * @access public
     * @see    ____func_see____
     * @since  1.0.0
     */
    public function getFeaturedProducts($categoryId)
    {
        return $this->findByCategoryId($categoryId);
    }

}
