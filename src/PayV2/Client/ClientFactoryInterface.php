<?php
/**
 * Copyright © Amazon.com, Inc. or its affiliates. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License").
 * You may not use this file except in compliance with the License.
 * A copy of the License is located at
 *
 *  http://aws.amazon.com/apache2.0
 *
 * or in the "license" file accompanying this file. This file is distributed
 * on an "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either
 * express or implied. See the License for the specific language governing
 * permissions and limitations under the License.
 */
namespace Amazon\PayV2\Client;

use Magento\Store\Model\ScopeInterface;
use Amazon\Pay\API\ClientInterface;

interface ClientFactoryInterface
{
    /**
     * Create amazon client instance
     *
     * @param null|int|string $scopeId
     * @param null|int|string $scope
     * @param array $config
     * @return ClientInterface
     */
    public function create($scopeId = null, $scope = ScopeInterface::SCOPE_STORE, array $config = []);
}
