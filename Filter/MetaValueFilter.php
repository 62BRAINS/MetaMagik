<?php

namespace Kanboard\Plugin\MetaMagik\Filter;

use Kanboard\Core\Filter\FilterInterface;
use Kanboard\Filter\BaseFilter;
use Kanboard\Model\MetadataModel;
use Kanboard\Model\TaskModel;
use Kanboard\Model\TaskMetadataModel;
use PicoDb\Database;

/**
 * Class Metadata Value Filter
 *
 */
class MetaValueFilter extends BaseFilter implements FilterInterface
{
    const TABLE = 'task_has_metadata';
    /**
     * Database object
     *
     * @access private
     * @var Database
     */
    private $db;

    /**
     * Get search attribute
     *
     * @access public
     * @return string[]
     */
    public function getAttributes()
    {
        return array('metaval');
    }

    /**
     * Set database object
     *
     * @access public
     * @param  Database $db
     * @return $this
     */
    public function setDatabase(Database $db)
    {
        $this->db = $db;
        return $this;
    }

    /**
     * Apply filter
     *
     * @access public
     * @return FilterInterface
     */
    public function apply()
    {
        $metafield = $this->db
            ->table(self::TABLE)
            ->ilike('value', '%'.$this->value.'%')
            ->asc('task_id')
            ->findAllByColumn('task_id');
            
        $task_ids = $metafield;

        return $this->query->in(TaskModel::TABLE.'.id', $task_ids);

    }
}
