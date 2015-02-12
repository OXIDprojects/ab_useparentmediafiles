<?php

/**
 * ab useParentMediaFiles
 * Copyright (C) 2015  Alfred Bez
 *
 * This program is free software;
 * you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation;
 * either version 3 of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY;
 * without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 * You should have received a copy of the GNU General Public License along with this program; if not, see <http://www.gnu.org/licenses/>
 */
class ab_useParentMediaFiles extends ab_useParentMediaFiles_parent
{

    /**
     * Template variable getter. Returns media files of current product
     *
     * @return array
     */
    public function getMediaFiles() {
        if (!$this->_aMediaFiles) {
            $oProduct = $this->getProduct();
            if (($oParent = $this->_getParentProduct($oProduct->oxarticles__oxparentid->value))) {
                $this->_aMediaFiles = $oParent->getMediaUrls();
            }
        }

        return $this->_aMediaFiles;
    }
}
