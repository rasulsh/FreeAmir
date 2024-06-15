<x-report-layout :title="'Report'">
    <table class="transactions">
        <thead>
            <tr>
                <th style="width: 1cm">{{ __('Document') }}</th>
                <th style="width: 2cm">{{ __('Date') }}</th>
                <th>{{ __('Description') }}</th>
                <th style="width: 3cm">{{ __('Debit') }}</th>
                <th style="width: 3cm">{{ __('Credit') }}</th>
                <th style="width: 3cm">{{ __('Balance') }}</th>
            </tr>
        </thead>
        <tbody style="border-bottom: solid 1px">
            @php
                $balance = 0;
            @endphp
            @foreach ($transactions as $transaction)
                <tr>
                    <td>{{ $transaction->document->number }}</td>
                    <td>{{ formatDate($transaction->document->date) }}</td>
                    <td>{{ $transaction->desc }}</td>
                    @php
                        $debit = $transaction->value < 0 ? -1 * $transaction->value : 0;
                        $credit = $transaction->value > 0 ? $transaction->value : 0;
                        $balance += $credit - $debit;
                    @endphp
                    <td>{{ formatNumber($debit) }}</td>
                    <td>{{ formatNumber($credit) }}</td>
                    <td>{{ formatNumber($balance) }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-report-layout>
