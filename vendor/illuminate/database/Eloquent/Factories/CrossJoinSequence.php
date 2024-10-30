<?php

namespace IAWPSCOPED\Illuminate\Database\Eloquent\Factories;

use IAWPSCOPED\Illuminate\Support\Arr;
/** @internal */
class CrossJoinSequence extends Sequence
{
    /**
     * Create a new cross join sequence instance.
     *
     * @param  array  $sequences
     * @return void
     */
    public function __construct(...$sequences)
    {
        $crossJoined = \array_map(function ($a) {
            return \array_merge(...$a);
        }, Arr::crossJoin(...$sequences));
        parent::__construct(...$crossJoined);
    }
}
