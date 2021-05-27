<?php

function swap(&$a, &$b)
{
    $tmp = $a;
    $a = $b;
    $b = $tmp;
}

interface ISort
{
    public function Sort($arr, $n);
}

class SelectionSort implements ISort
{
    public function Sort($arr, $n)
    {
        for ($i = 0; $i < $n; $i++) {
            $min = $i;
            for ($j = $i + 1; $j < $n; $j++) {
                if ($arr[$j] < $arr[$min]) {
                    $min = $j;
                }
            }

            if ($arr[$i] > $arr[$min]) {
                swap($arr[$i], $arr[$min]);
            }
        }

        return $arr;
    }
}

class BubbleSort implements ISort
{
    public function Sort($arr, $n)
    {
        for ($i = 0; $i < $n; $i++) {
            for ($j = 0; $j < $n - $i - 1; $j++) {
                if ($arr[$j] > $arr[$j + 1]) {
                    swap($arr[$j], $arr[$j + 1]);
                }
            }
        }

        return $arr;
    }
}

class InsertionSort implements ISort
{
    public function Sort($arr, $n)
    {
        for ($i = 1; $i < $n; $i++) {
            $key = $arr[$i];
            $j = $i - 1;

            while ($j >= 0 && $arr[$j] > $key) {
                $arr[$j + 1] = $arr[$j];
                $j = $j - 1;
            }

            $arr[$j + 1] = $key;
        }

        return $arr;
    }
}

class CycleSort implements ISort
{

    public function Sort($arr, $n)
    {
        $writes = 0;

        for ($cycle_start = 0; $cycle_start <= $n - 2; $cycle_start++) {

            $item = $arr[$cycle_start];

            $pos = $cycle_start;
            for ($i = $cycle_start + 1; $i < $n; $i++)
                if ($arr[$i] < $item)
                    $pos++;

            if ($pos == $cycle_start)
                continue;

            while ($item == $arr[$pos])
                $pos += 1;

            if ($pos != $cycle_start) {
                $temp = $item;
                $item = $arr[$pos];
                $arr[$pos] = $temp;
                $writes++;
            }

            while ($pos != $cycle_start) {
                $pos = $cycle_start;

                for ($i = $cycle_start + 1; $i < $n; $i++)
                    if ($arr[$i] < $item)
                        $pos += 1;

                while ($item == $arr[$pos])
                    $pos += 1;

                if ($item != $arr[$pos]) {
                    $temp = $item;
                    $item = $arr[$pos];
                    $arr[$pos] = $temp;
                    $writes++;
                }
            }
        }

        return $arr;
    }
}

class CocktailSort implements ISort
{
    public function Sort($arr, $n)
    {
        $swapped = true;
        $start = 0;
        $end = $n - 1;

        while ($swapped) {

            $swapped = false;

            for ($i = $start; $i < $end; ++$i) {
                if ($arr[$i] > $arr[$i + 1]) {
                    swap($arr[$i], $arr[$i + 1]);
                    $swapped = true;
                }
            }

            if (!$swapped)
                break;

            $swapped = false;

            --$end;

            for ($i = $end - 1; $i >= $start; --$i) {
                if ($arr[$i] > $arr[$i + 1]) {
                    swap($arr[$i], $arr[$i + 1]);
                    $swapped = true;
                }
            }

            ++$start;
        }

        return $arr;
    }
}
