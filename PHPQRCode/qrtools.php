<?php
/*
 * PHP QR Code encoder
 *
 * Toolset, handy and debug utilites.
 *
 * PHP QR Code is distributed under LGPL 3
 * Copyright (C) 2010 Dominik Dzienia <deltalab at poczta dot fm>
 *
 * This library is free software; you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation; either
 * version 3 of the License, or any later version.
 *
 * This library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this library; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA 02110-1301 USA
 */

 class QR {
    
    //----------------------------------------------------------------------
    public static function binarize($frame)
    {
        $len = count($frame);
        foreach ($frame as &$frameLine) {
            for($i=0; $i<$len; $i++) {
                $frameLine[$i] = (ord($frameLine[$i]) & 1) ? '1' : '0';
            }
        }
        return $frame;
    }
    
    //----------------------------------------------------------------------
    public static function tcpdfBarcodeArray($code, $mode = 'QR,L', $tcPdfVersion = '4.5.037')
    {
        $barcode_array = array();
        
        if (!is_array($mode))
            $mode = explode(',', $mode);
            
        $eccLevel = 'L';
            
        if (count($mode) > 1) {
            $eccLevel = $mode[1];
        }
            
        // Assuming QRcode class is available
        $qrTab = QRcode::text($code, false, $eccLevel);
        $size = count($qrTab);
            
        $barcode_array['num_rows'] = $size;
        $barcode_array['num_cols'] = $size;
        $barcode_array['bcode'] = array();
            
        foreach ($qrTab as $line) {
            $arrAdd = array();
            foreach (str_split($line) as $char)
                $arrAdd[] = ($char == '1') ? 1 : 0;
            $barcode_array['bcode'][] = $arrAdd;
        }
                
        return $barcode_array;
    }
    
    //----------------------------------------------------------------------
    // Other methods...
}
