/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Author:  jrcsc
 * Created: Feb 1, 2017
 */

CREATE TABLE IF NOT EXISTS `arreglos` (
  `id` int(11) NOT NULL,
  `function_name` char(30) NOT NULL,
  `function_description` char(150) NOT NULL,
  `function_version` char(25) NOT NULL,
  `function_code` char(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


INSERT INTO arreglos (`function_name`, `function_description`, `function_version`, `function_code`) 
VALUES ('array_change_key_case', 'Changes the case of all keys in an array' , 'php7.0.10', 'codigo'),
('array_chunk', 'Split an array into chunks' , 'php7.0.10', 'codigo'),
('array_column', 'Return the values from a single column in the input array' , 'php7.0.10', 'codigo'),
('array_combine', 'Creates an array by using one array for keys and another for its values' , 'php7.0.10', 'codigo'),
('array_count_values', 'Counts all the values of an array' , 'php7.0.10', 'codigo'),
('array_diff_assoc', 'Computes the difference of arrays with additional index check' , 'php7.0.10', 'codigo'),
('array_diff_key', 'Computes the difference of arrays using keys for comparison' , 'php7.0.10', 'codigo'),
('array_diff_uassoc', 'Computes the difference of arrays with additional index check which is performed by a user supplied callback function' , 'php7.0.10', 'codigo'),
('array_diff_ukey', 'Computes the difference of arrays using a callback function on the keys for comparison' , 'php7.0.10', 'codigo'),
('array_diff', 'Computes the difference of arrays' , 'php7.0.10', 'codigo'),
('array_fill_keys', 'Fill an array with values, specifying keys' , 'php7.0.10', 'codigo'),
('array_fill', 'Fill an array with values' , 'php7.0.10', 'codigo'),
('array_filter', 'Filters elements of an array using a callback function' , 'php7.0.10', 'codigo'),
('array_flip', 'Exchanges all keys with their associated values in an array' , 'php7.0.10', 'codigo'),
('array_intersect_assoc', 'Computes the intersection of arrays with additional index check' , 'php7.0.10', 'codigo'),
('array_intersect_key', 'Computes the intersection of arrays using keys for comparison' , 'php7.0.10', 'codigo'),
('array_intersect_uassoc', 'Computes the intersection of arrays with additional index check, compares indexes by a callback function' , 'php7.0.10', 'codigo'),
('array_intersect_ukey', 'Computes the intersection of arrays using a callback function on the keys for comparison' , 'php7.0.10', 'codigo'),
('array_intersect', 'Computes the intersection of arrays' , 'php7.0.10', 'codigo'),
('array_key_exists', 'Checks if the given key or index exists in the array' , 'php7.0.10', 'codigo'),
('array_keys', 'Return all the keys or a subset of the keys of an array' , 'php7.0.10', 'codigo'),
('array_map', 'Applies the callback to the elements of the given arrays' , 'php7.0.10', 'codigo'),
('array_merge_recursive', 'Merge two or more arrays recursively' , 'php7.0.10', 'codigo'),
('array_merge', 'Merge one or more arrays' , 'php7.0.10', 'codigo'),
('array_multisort', 'Sort multiple or multi-dimensional arrays' , 'php7.0.10', 'codigo'),
('array_pad', 'Pad array to the specified length with a value' , 'php7.0.10', 'codigo'),
('array_pop', 'Pop the element off the end of array' , 'php7.0.10', 'codigo'),
('array_product', 'Calculate the product of values in an array' , 'php7.0.10', 'codigo'),
('array_push', 'Push one or more elements onto the end of array' , 'php7.0.10', 'codigo'),
('array_rand', 'Pick one or more random entries out of an array' , 'php7.0.10', 'codigo'),
('array_reduce', 'Iteratively reduce the array to a single value using a callback function' , 'php7.0.10', 'codigo'),
('array_replace_recursive', 'Replaces elements from passed arrays into the first array recursively' , 'php7.0.10', 'codigo'),
('array_replace', 'Replaces elements from passed arrays into the first array' , 'php7.0.10', 'codigo'),
('array_reverse', 'Return an array with elements in reverse order' , 'php7.0.10', 'codigo'),
('array_search', 'Searches the array for a given value and returns the first corresponding key if successful' , 'php7.0.10', 'codigo'),
('array_shift', 'Shift an element off the beginning of array' , 'php7.0.10', 'codigo'),
('array_slice', 'Extract a slice of the array' , 'php7.0.10', 'codigo'),
('array_splice', 'Remove a portion of the array and replace it with something else' , 'php7.0.10', 'codigo'),
('array_sum', 'Calculate the sum of values in an array' , 'php7.0.10', 'codigo'),
('array_udiff_assoc', 'Computes the difference of arrays with additional index check, compares data by a callback function' , 'php7.0.10', 'codigo'),
('array_udiff_uassoc', 'Computes the difference of arrays with additional index check, compares data and indexes by a callback function' , 'php7.0.10', 'codigo'),
('array_udiff', 'Computes the difference of arrays by using a callback function for data comparison' , 'php7.0.10', 'codigo'),
('array_uintersect_assoc', 'Computes the intersection of arrays with additional index check, compares data by a callback function' , 'php7.0.10', 'codigo'),
('array_uintersect_uassoc', 'Computes the intersection of arrays with additional index check, compares data and indexes by separate callback functions' , 'php7.0.10', 'codigo'),
('array_uintersect', 'Computes the intersection of arrays, compares data by a callback function' , 'php7.0.10', 'codigo'),
('array_unique', 'Removes duplicate values from an array' , 'php7.0.10', 'codigo'),
('array_unshift', 'Prepend one or more elements to the beginning of an array' , 'php7.0.10', 'codigo'),
('array_values', 'Return all the values of an array' , 'php7.0.10', 'codigo'),
('array_walk_recursive', 'Apply a user function recursively to every member of an array' , 'php7.0.10', 'codigo'),
('array_walk', 'Apply a user supplied function to every member of an array' , 'php7.0.10', 'codigo'),
('array', 'Create an array' , 'php7.0.10', 'codigo'),
('arsort', 'Sort an array in reverse order and maintain index association' , 'php7.0.10', 'codigo'),
('asort', 'Sort an array and maintain index association' , 'php7.0.10', 'codigo'),
('compact', 'Create array containing variables and their values' , 'php7.0.10', 'codigo'),
('count', 'Count all elements in an array, or something in an object' , 'php7.0.10', 'codigo'),
('current', 'Return the current element in an array' , 'php7.0.10', 'codigo'),
('each', 'Return the current key and value pair from an array and advance the array cursor' , 'php7.0.10', 'codigo'),
('end', 'Set the internal pointer of an array to its last element' , 'php7.0.10', 'codigo'),
('extract', 'Import variables into the current symbol table from an array' , 'php7.0.10', 'codigo'),
('in_array', 'Checks if a value exists in an array' , 'php7.0.10', 'codigo'),
('key_exists', 'Alias of array_key_exists' , 'php7.0.10', 'codigo'),
('key', 'Fetch a key from an array' , 'php7.0.10', 'codigo'),
('krsort', 'Sort an array by key in reverse order' , 'php7.0.10', 'codigo'),
('ksort', 'Sort an array by key' , 'php7.0.10', 'codigo'),
('list', 'Assign variables as if they were an array' , 'php7.0.10', 'codigo'),
('natcasesort', 'Sort an array using a case insensitive "natural order" algorithm' , 'php7.0.10', 'codigo'),
('natsort', 'Sort an array using a "natural order" algorithm' , 'php7.0.10', 'codigo'),
('next', 'Advance the internal array pointer of an array' , 'php7.0.10', 'codigo'),
('pos', 'Alias of current' , 'php7.0.10', 'codigo'),
('prev', 'Rewind the internal array pointer' , 'php7.0.10', 'codigo'),
('range', 'Create an array containing a range of elements' , 'php7.0.10', 'codigo'),
('reset', 'Set the internal pointer of an array to its first element' , 'php7.0.10', 'codigo'),
('rsort', 'Sort an array in reverse order' , 'php7.0.10', 'codigo'),
('shuffle', 'Shuffle an array' , 'php7.0.10', 'codigo'),
('sizeof', 'Alias of count' , 'php7.0.10', 'codigo'),
('sort', 'Sort an array' , 'php7.0.10', 'codigo'),
('uasort', 'Sort an array with a user-defined comparison function and maintain index association' , 'php7.0.10', 'codigo'),
('uksort', 'Sort an array by keys using a user-defined comparison function' , 'php7.0.10', 'codigo'),
('usort', 'Sort an array by values using a user-defined comparison function' , 'php7.0.10', 'codigo');