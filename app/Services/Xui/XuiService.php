<?php

namespace App\Services\Xui;

class XuiService {

    public ApiService $api ;

    /**
     * @return $this
     */
    public function make(): static
    {
        $this->api = new ApiService(
            config('xui.host') ,
            config('xui.port') ,
            config('xui.username') ,
            config('xui.password') ,
        );
        return $this ;
    }


}
