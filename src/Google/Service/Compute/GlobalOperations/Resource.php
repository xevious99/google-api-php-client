<?php
namespace Google\Service\Compute\GlobalOperations;

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
 * The "globalOperations" collection of methods.
 * Typical usage is:
 *  <code>
 *   $computeService = new Google_Service_Compute(...);
 *   $globalOperations = $computeService->globalOperations;
 *  </code>
 */
class Resource extends \Google\Service\Resource
{

  /**
   * Retrieves the list of all operations grouped by scope.
   * (globalOperations.aggregatedList)
   *
   * @param string $project
   * Name of the project scoping this request.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string filter
   * Optional. Filter expression for filtering listed resources.
   * @opt_param string pageToken
   * Optional. Tag returned by a previous list request truncated by maxResults. Used to continue a
    * previous list request.
   * @opt_param string maxResults
   * Optional. Maximum count of results to be returned. Maximum value is 500 and default value is
    * 100.
   * @return \Google\Service\Compute\OperationAggregatedList
   */
  public function aggregatedList($project, $optParams = array())
  {
    $params = array('project' => $project);
    $params = array_merge($params, $optParams);
    return $this->call('aggregatedList', array($params), "\Google\Service\Compute\OperationAggregatedList");
  }
  /**
   * Deletes the specified operation resource. (globalOperations.delete)
   *
   * @param string $project
   * Name of the project scoping this request.
   * @param string $operation
   * Name of the operation resource to delete.
   * @param array $optParams Optional parameters.
   */
  public function delete($project, $operation, $optParams = array())
  {
    $params = array('project' => $project, 'operation' => $operation);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params));
  }
  /**
   * Retrieves the specified operation resource. (globalOperations.get)
   *
   * @param string $project
   * Name of the project scoping this request.
   * @param string $operation
   * Name of the operation resource to return.
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Compute\Operation
   */
  public function get($project, $operation, $optParams = array())
  {
    $params = array('project' => $project, 'operation' => $operation);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "\Google\Service\Compute\Operation");
  }
  /**
   * Retrieves the list of operation resources contained within the specified
   * project. (globalOperations.listGlobalOperations)
   *
   * @param string $project
   * Name of the project scoping this request.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string filter
   * Optional. Filter expression for filtering listed resources.
   * @opt_param string pageToken
   * Optional. Tag returned by a previous list request truncated by maxResults. Used to continue a
    * previous list request.
   * @opt_param string maxResults
   * Optional. Maximum count of results to be returned. Maximum value is 500 and default value is
    * 100.
   * @return \Google\Service\Compute\OperationList
   */
  public function listGlobalOperations($project, $optParams = array())
  {
    $params = array('project' => $project);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "\Google\Service\Compute\OperationList");
  }
}
