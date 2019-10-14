<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a href="{{ route(('home')) }}" class="navbar-brand">Home</a>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="{{ route('summaryData.index') }}">Summary of beers</a></li>
            <li><a href="{{ route('addData.index') }}">Add new beers</a></li>
            <li><a href="{{ route('updateData.index') }}">Update existing beers</a></li>
            <li><a href="{{ route('deleteData.index') }}">Delete beers</a></li>
        </ul>
    </div>
</nav>