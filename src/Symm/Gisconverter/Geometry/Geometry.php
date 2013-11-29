<?php

namespace Symm\Gisconverter\Geometry;

use Symm\Gisconverter\Interfaces\GeometryInterface;

abstract class Geometry implements GeometryInterface {
    const name = "";

    public function toGeoJSON() {
        throw new UnimplementedMethod(__FUNCTION__, get_called_class());
    }

    public function toKML() {
        throw new UnimplementedMethod(__FUNCTION__, get_called_class());
    }

    public function toGPX($mode = null) {
        throw new UnimplementedMethod(__FUNCTION__, get_called_class());
    }

    public function toWKT() {
        throw new UnimplementedMethod(__FUNCTION__, get_called_class());
    }

    public function equals(Geometry $geom) {
        throw new UnimplementedMethod(__FUNCTION__, get_called_class());
    }

    public function __toString() {
        return $this->toWKT();
    }
}