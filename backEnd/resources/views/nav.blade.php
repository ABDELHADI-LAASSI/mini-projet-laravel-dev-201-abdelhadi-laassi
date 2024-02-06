<nav style="display:flex; justify-content: space-between;padding: 3rem">
    <ul style="list-style: none ; display: flex;gap: 2rem" >
        <li><a href={{ route('adminA') }}>Ajouter</a></li>
        <li><a href={{ route('adminV') }}>products</a></li>
    </ul>

    <button><a href={{route('logout')}}>LOG OUT</a></button>
</nav>
