<?php

namespace Craftgate\Adapter;

use Craftgate\Util\QueryBuilder;

class SettlementReportingAdapter extends BaseAdapter
{
    public function searchPayoutCompletedTransactions(array $request)
    {
        $path = "/settlement-reporting/v1/settlement-file/payout-completed-transactions" . QueryBuilder::build($request);
        return $this->httpGet($path);
    }

    public function searchBouncedPayoutTransactions(array $request)
    {
        $path = "/settlement-reporting/v1/settlement-file/bounced-sub-merchant-rows" . QueryBuilder::build($request);
        return $this->httpGet($path);
    }
}
