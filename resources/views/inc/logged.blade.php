<<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div style="font-size: 20px; font-family: 'Barlow Condensed'; color: #d3" align="center" class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div style="font-size: 20px; font-family: 'Barlow Condensed'; color: #d3" align="center">
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
