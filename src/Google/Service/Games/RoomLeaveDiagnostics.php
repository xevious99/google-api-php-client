<?php
namespace Google\Service\Games;

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


class RoomLeaveDiagnostics extends \Google\Collection
{
  public $androidNetworkSubtype;
  public $androidNetworkType;
  public $kind;
  protected $peerSessionType = '\Google\Service\Games\PeerSessionDiagnostics';
  protected $peerSessionDataType = 'array';
  public $socketsUsed;

  public function setAndroidNetworkSubtype($androidNetworkSubtype)
  {
    $this->androidNetworkSubtype = $androidNetworkSubtype;
  }

  public function getAndroidNetworkSubtype()
  {
    return $this->androidNetworkSubtype;
  }
  
  public function setAndroidNetworkType($androidNetworkType)
  {
    $this->androidNetworkType = $androidNetworkType;
  }

  public function getAndroidNetworkType()
  {
    return $this->androidNetworkType;
  }
  
  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }
  
  public function setPeerSession($peerSession)
  {
    $this->peerSession = $peerSession;
  }

  public function getPeerSession()
  {
    return $this->peerSession;
  }
  
  public function setSocketsUsed($socketsUsed)
  {
    $this->socketsUsed = $socketsUsed;
  }

  public function getSocketsUsed()
  {
    return $this->socketsUsed;
  }
  
}
