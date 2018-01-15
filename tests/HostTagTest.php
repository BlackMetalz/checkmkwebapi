<?php

/**
 * Copyright (C) 2018 Benjamin Heisig
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program. If not, see <http://www.gnu.org/licenses/>.
 *
 * @author Benjamin Heisig <https://benjamin.heisig.name/>
 * @copyright Copyright (C) 2018 Benjamin Heisig
 * @license http://www.gnu.org/licenses/agpl-3.0 GNU Affero General Public License (AGPL)
 * @link https://github.com/bheisig/check_mk-web-api
 */

use bheisig\checkmkwebapi\HostTag;

class HostTagTest extends BaseTest {

    /**
     * @var \bheisig\checkmkwebapi\HostTag
     */
    protected $instance;

    /**
     * @throws \Exception on error
     */
    public function setUp () {
        parent::setUp();

        $this->instance = new HostTag($this->api);
    }

    /**
     * @throws \Exception on error
     */
    public function testGetAll() {
        $result = $this->instance->getAll();

        $this->assertInternalType('array', $result);
        $this->assertNotCount(0, $result);
    }

    /**
     * @throws \Exception on error
     */
    public function testSet() {
        $tags = $this->instance->getAll();

        $result = $this->instance->set($tags);

        $this->assertInstanceOf(HostTag::class, $result);
    }

}