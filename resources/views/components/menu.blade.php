<li><a href="/" class="hover:rounded-xl">{{ __('Home') }}</a></li>
<li>
    <details>
        <summary>عملیات</summary>
        <ul>
            <li><a href="">دریافت و پرداخت</a></li>
            <li><a href="">ثبت فاکتور فروش</a></li>
            <li><a href="">ثبت فاکتور خرید</a></li>
            <li><a href="{{ route('customers.create') }}">{{ __('Add Customer') }}</a></li>
        </ul>
    </details>
</li>
<li>
    <details>
        <summary>حسابداری</summary>
        <ul>
            <li><a href="{{ route('documents.create') }}">{{ __('Create Document') }}</a></li>
            <li><a href="{{ route('documents.index') }}">{{ __('Document List') }}</a></li>
        </ul>
    </details>
</li>
<li>
    <details>
        <summary>گزارشات</summary>
        <ul>
            <li>
                <details>
                    <summary>حسابداری</summary>
                    <ul>
                        <li><a href="">سند</a></li>
                        <li><a href="{{ route('reports.journal') }}">روزنامه</a></li>
                        <li><a href="{{ route('reports.ledger') }}">کل</a></li>
                        <li><a href="{{ route('reports.subLedger') }}">معین</a></li>
                        <li><a href="">سود و زیان</a></li>
                    </ul>
                </details>
                </a>
            </li>
            <li>
                <details>
                    <summary>انبار</summary>
                    <ul>
                        <li><a href="{{ route('products.index') }}">{{ __('Products') }}</a></li>
                        <li><a href="{{ route('product-groups.index') }}">{{ __('Product Groups') }}</a>
                        </li>
                    </ul>
                </details>
            </li>
            <li>
                <details>
                    <summary>طرف حسابها</summary>
                    <ul>
                        <li><a href="">بدهکاران</a></li>
                        <li><a href="">بستانکاران</a></li>
                    </ul>
                </details>
            </li>
        </ul>
    </details>
</li>

<li>
    <details>
        <summary>{{ __('Management') }}</summary>
        <ul>
            <li><a href="{{ route('subjects.index') }}">{{ __('Subjects') }}</a></li>
            <li><a href="{{ route('bank-accounts.index') }}">{{ __('Bank Accounts') }}</a></li>
            <li><a href="{{ route('customers.index') }}">{{ __('Customers') }} </a></li>
            <li><a href="{{ route('customer-groups.index') }}">{{ __('Customers Groups') }} </a></li>
            <li><a href="{{ route('companies.index') }}">{{ __('Companies') }} </a></li>
            <li><a href="{{ route('banks.index') }}">{{ __('Banks') }}</a></li>
            <li><a href="{{ route('users.index') }}">{{ __('Users') }}</a></li>
            <li><a href="{{ route('permissions.index') }}">{{ __('Permissions') }}</a></li>
            <li><a href="{{ route('roles.index') }}">{{ __('Roles') }}</a></li>
            <li><a href="{{ route('configs.index') }}">{{ __('Configs') }}</a></li>
            <li><a href="https://github.com/Jooyeshgar/FreeAmir/issues">{{ __('Support') }}</a></li>
        </ul>
    </details>
</li>
