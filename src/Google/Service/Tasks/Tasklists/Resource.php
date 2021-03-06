<?php
namespace Google\Service\Tasks\Tasklists;

/*
 * Copyright 2010 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

/**
 * The "tasklists" collection of methods.
 * Typical usage is:
 *  <code>
 *   $tasksService = new Google_Service_Tasks(...);
 *   $tasklists = $tasksService->tasklists;
 *  </code>
 */
class Resource extends \Google\Service\Resource
{

  /**
   * Deletes the authenticated user's specified task list. (tasklists.delete)
   *
   * @param string $tasklist
   * Task list identifier.
   * @param array $optParams Optional parameters.
   */
  public function delete($tasklist, $optParams = array())
  {
    $params = array('tasklist' => $tasklist);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params));
  }
  /**
   * Returns the authenticated user's specified task list. (tasklists.get)
   *
   * @param string $tasklist
   * Task list identifier.
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Tasks\TaskList
   */
  public function get($tasklist, $optParams = array())
  {
    $params = array('tasklist' => $tasklist);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "\Google\Service\Tasks\TaskList");
  }
  /**
   * Creates a new task list and adds it to the authenticated user's task lists.
   * (tasklists.insert)
   *
   * @param \Google\TaskList $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Tasks\TaskList
   */
  public function insert(\Google\Service\Tasks\TaskList $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "\Google\Service\Tasks\TaskList");
  }
  /**
   * Returns all the authenticated user's task lists. (tasklists.listTasklists)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string pageToken
   * Token specifying the result page to return. Optional.
   * @opt_param string maxResults
   * Maximum number of task lists returned on one page. Optional. The default is 100.
   * @return \Google\Service\Tasks\TaskLists
   */
  public function listTasklists($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "\Google\Service\Tasks\TaskLists");
  }
  /**
   * Updates the authenticated user's specified task list. This method supports
   * patch semantics. (tasklists.patch)
   *
   * @param string $tasklist
   * Task list identifier.
   * @param \Google\TaskList $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Tasks\TaskList
   */
  public function patch($tasklist, \Google\Service\Tasks\TaskList $postBody, $optParams = array())
  {
    $params = array('tasklist' => $tasklist, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "\Google\Service\Tasks\TaskList");
  }
  /**
   * Updates the authenticated user's specified task list. (tasklists.update)
   *
   * @param string $tasklist
   * Task list identifier.
   * @param \Google\TaskList $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Tasks\TaskList
   */
  public function update($tasklist, \Google\Service\Tasks\TaskList $postBody, $optParams = array())
  {
    $params = array('tasklist' => $tasklist, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "\Google\Service\Tasks\TaskList");
  }
}
