<?php
/**
 * MPager - постраничная навигация
 *
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 *
 * @package    MPager
 * @subpackage MPager\View
 */

namespace MPager;

/**
 * Абстрактный класс представления постраничной навигации
 *
 * @author M. Blyzniuk <mukolakolia@gmail.com>
 *
 * @abstract
 */
abstract class View
{
    /**
     * @var Pager объект постраничной навигации
     */
    protected $pager;

    /**
     * Формирует ссылку на страницу
     *
     * @param String $title название ссылки
     * @param Integer $current_page номер текущей страницы
     * @return String
     */
    public function link($title, $current_page = 1)
    {
        return "<a href='{$this->pager->getCurrentPagePath()}?".
               "{$this->pager->getCounterParam()}={$current_page}".
               "{$this->pager->getParameters()}'>{$title}</a>";
    }

    /**
     * Формирует строку постраничной навигации
     *
     * @abstract
     * @param Pager $pager объект постраничной навигации
     * @return String
     */
    abstract public function render(Pager $pager);
}
