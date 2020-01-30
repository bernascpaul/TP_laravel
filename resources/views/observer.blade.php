<h1 style="color: #4651f0;">Observer</h1>

<h3>Un-updated :</h3>
<span>{{ $obs1->getText() }}</span>
<span>&nbsp;&nbsp;</span>
<span>{{ $obs2->getText() }}</span>

{{ $sujet->update() }}

<h3>Updated :</h3>
<span>{{ $obs1->getText() }}</span>
<span>&nbsp;&nbsp;</span>
<span>{{ $obs2->getText() }}</span>
