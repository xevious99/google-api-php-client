<?php
namespace Google\Service;

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
 * Service definition for Doubleclicksearch (v2).
 *
 * <p>
 * Report and modify your advertising data in DoubleClick Search (for example, campaigns, ad groups, keywords, and conversions).
 * </p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://developers.google.com/doubleclick-search/" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Doubleclicksearch extends \Google\Service
{


  public $conversion;
  public $reports;
  

  /**
   * Constructs the internal representation of the Doubleclicksearch service.
   *
   * @param \Google\Client $client
   */
  public function __construct(\Google\Client $client)
  {
    parent::__construct($client);
    $this->servicePath = 'doubleclicksearch/v2/';
    $this->version = 'v2';
    $this->serviceName = 'doubleclicksearch';

    $this->conversion = new \Google\Service\Doubleclicksearch\Conversion\Resource(
        $this,
        $this->serviceName,
        'conversion',
        array(
          'methods' => array(
            'get' => array(
              'path' => 'agency/{agencyId}/advertiser/{advertiserId}/engine/{engineAccountId}/conversion',
              'httpMethod' => 'GET',
              'parameters' => array(
                'agencyId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'advertiserId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'engineAccountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'endDate' => array(
                  'location' => 'query',
                  'type' => 'integer',
                  'required' => true,
                ),
                'rowCount' => array(
                  'location' => 'query',
                  'type' => 'integer',
                  'required' => true,
                ),
                'startDate' => array(
                  'location' => 'query',
                  'type' => 'integer',
                  'required' => true,
                ),
                'startRow' => array(
                  'location' => 'query',
                  'type' => 'integer',
                  'required' => true,
                ),
                'adGroupId' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'campaignId' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'adId' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'criterionId' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'insert' => array(
              'path' => 'conversion',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),'patch' => array(
              'path' => 'conversion',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'advertiserId' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'required' => true,
                ),
                'agencyId' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'required' => true,
                ),
                'endDate' => array(
                  'location' => 'query',
                  'type' => 'integer',
                  'required' => true,
                ),
                'engineAccountId' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'required' => true,
                ),
                'rowCount' => array(
                  'location' => 'query',
                  'type' => 'integer',
                  'required' => true,
                ),
                'startDate' => array(
                  'location' => 'query',
                  'type' => 'integer',
                  'required' => true,
                ),
                'startRow' => array(
                  'location' => 'query',
                  'type' => 'integer',
                  'required' => true,
                ),
              ),
            ),'update' => array(
              'path' => 'conversion',
              'httpMethod' => 'PUT',
              'parameters' => array(),
            ),
          )
        )
    );
    $this->reports = new \Google\Service\Doubleclicksearch\Reports\Resource(
        $this,
        $this->serviceName,
        'reports',
        array(
          'methods' => array(
            'generate' => array(
              'path' => 'reports/generate',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),'get' => array(
              'path' => 'reports/{reportId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'reportId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'getFile' => array(
              'path' => 'reports/{reportId}/files/{reportFragment}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'reportId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'reportFragment' => array(
                  'location' => 'path',
                  'type' => 'integer',
                  'required' => true,
                ),
              ),
            ),'request' => array(
              'path' => 'reports',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),
          )
        )
    );
  }
}
