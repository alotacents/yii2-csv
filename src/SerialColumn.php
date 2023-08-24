<?php
/**
 * @link https://github.com/yii2tech
 * @copyright Copyright (c) 2015 Yii2tech
 * @license [New BSD License](http://www.opensource.org/licenses/bsd-license.php)
 */

namespace alotacents\yii2-csv;

/**
 * SerialColumn displays a column of row numbers (1-based).
 *
 * To add a SerialColumn to the {@see CsvGrid}, add it to the {@see CsvGrid::$columns} configuration as follows:
 *
 * ```php
 * 'columns' => [
 *     [
 *         'class' => 'alotacents\yii2-csv\SerialColumn',
 *     ],
 *     // ...
 * ]
 * ```
 *
 * @author Paul Klimov <klimov.paul@gmail.com>
 * @since 1.0.2
 */
class SerialColumn extends Column
{
    /**
     * {@inheritdoc}
     */
    public $header = '#';


    /**
     * {@inheritdoc}
     */
    public function renderDataCellContent($model, $key, $index)
    {
        return $index + 1;
    }
}
