<?php

/**
 * webtrees: online genealogy
 * Copyright (C) 2015 webtrees development team
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 * You should have received a copy of the GNU General Public License
 * along with this program. If not, see <http://www.gnu.org/licenses/>.
 */

namespace Fisharebest\Webtrees\Census;

/**
 * Test harness for the class CensusOfScotland1861
 */
class CensusOfScotland1861Test extends \PHPUnit_Framework_TestCase {
	/**
	 * Test the census place and date
	 */
	public function testPlaceAndDate() {
		$census = new CensusOfScotland1861;

		$this->assertSame('Scotland', $census->censusPlace());
		$this->assertSame('07 MAR 1861', $census->censusDate());
	}
}
