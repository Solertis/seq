<?php
/**
 * Copyright (c) 2014 Marcelo Camargo <marcelocamargo@linuxmail.org>
 *
 * Permission is hereby granted, free of charge, to any person
 * obtaining a copy of this software and associated documentation files
 * (the "Software"), to deal in the Software without restriction,
 * including without limitation the rights to use, copy, modify, merge,
 * publish, distribute, sublicense, and/or sell copies of the Software,
 * and to permit persons to whom the Software is furnished to do so,
 * subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be
 * included in all copies or substantial of portions the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,
 * EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF
 * MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND
 * NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE
 * LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION
 * OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION
 * WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 */
namespace HaskellCamargo\Seq;

abstract class AbstractSeq
{
  abstract function all($fn, $xs);
  abstract function andList($xs);
  abstract function any($fn, $xs);
  abstract function at($n, $xs);
  abstract function breakList($fn, $xs) 
  abstract function compact($xs);
  abstract function concat($xs);
  abstract function concatMap($fn, $xs);
  abstract function countBy($fn, $xs);
  abstract function difference();
  abstract function drop($n, $xs);
  abstract function dropWhile($fn, $xs);
  abstract function each($fn, $xs);
  abstract function elemIndex($x, $xs);
  abstract function elemIndices($x, $xs);
  abstract function filter($fn, $xs);
  abstract function find($fn, $xs);
  abstract function findIndex($fn, $xs);
  abstract function findIndices($fn, $xs);
  abstract function flatten($xs);
  abstract function fold($fn, $init, $xs);
  abstract function fold1($fn, $xs);
  abstract function foldr($fn, $init, $xs);
  abstract function foldr1($fn, $xs);
  abstract function groupBy($fn, $xs);
  abstract function head($xs);
  abstract function initial($xs);
  abstract function intersection();
  abstract function last($xs);
  abstract function map($fn, $xs);
  abstract function maximum($xs);
  abstract function maximumBy($xs);
  abstract function mean($xs);
  abstract function minimum($xs);
  abstract function minimumBy($xs);
  abstract function orList($xs);
  abstract function partition($fn, $xs);
  abstract function product($xs);
  abstract function reject($fn, $xs);
  abstract function reverse($xs);
  abstract function scan($fn, $init, $xs);
  abstract function scan1($fn, $xs);
  abstract function scanr($fn, $init, $xs);
  abstract function scanr1($fn, $xs);
  abstract function slice($x, $y, $xs);
  abstract function sort($xs);
  abstract function sortBy($fn, $xs);
  abstract function sortWith($xs);
  abstract function span($fn, $xs);
  abstract function splitAt($n, $xs);
  abstract function sum($xs);
  abstract function take($n, $xs);
  abstract function takeWhile($fn, $xs);
  abstract function tail($xs);
  abstract function unique($xs);
  abstract function uniqueBy($fn, $xs);
  abstract function unfoldr($fn, $init);
  abstract function union();
  abstract function zip($xs, $ys);
  abstract function zipWith($fn, $xs, $ys);
  abstract function zipAll();
  abstract function zipAllWith();
}