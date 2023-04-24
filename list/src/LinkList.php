<?php

namespace Ishawly\AlgorithmLearningPhp;

class LinkList
{
    private LinkListNode $list;

    public function getElem(int $i)
    {
        $p = $this->list->next;
        $j = 1;
        while ($p && $j < $i) {
            $p = $p->next;
            ++$j;
        }

        if ($p || $j > $i) {
            throw new \Exception('ERROR');
        }

        return $p->data;
    }
}