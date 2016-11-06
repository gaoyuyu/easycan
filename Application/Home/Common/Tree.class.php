<?php
/**
 * @Describtion 遍历节点
 */

namespace Home\Common;

class Tree
{
    // 定义静态数组,用于存储遍历结果
    public static $treeList = array();

    /**
     * 遍历删除节点
     *
     * @param $object
     * @param $pid
     * @return bool
     */
    public static function delete($object, $pid)
    {
        $nodeList = $object->select();
        $object->startTrans();

        $nodeList = self::create($nodeList, $pid);
        if (!empty($nodeList)) {
            foreach ($nodeList as $key => $value) {
                $result = $object->where('id=' . $value['id'])->delete();
            }
        }
        $result = $object->where('id=' . $pid)->delete();

        if (!$result) {
            $object->rollback();
            return false;
        }

        $object->commit();
        return true;
    }

    /**
     * 生成遍历树
     *
     * @param $data
     * @param int $pid
     * @return array
     */
    public static function create($data, $pid = 0)
    {
        foreach ($data as $key => $value) {
            if ($value['pid'] == $pid) {
                self::$treeList[] = $value;
                unset($data[$key]);
                self::create($data, $value['id']);
            }
        }
        return self::$treeList;
    }
}
