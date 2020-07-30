const navItems = [
    {
        title: 'startup',
        href: '#startup'
    },
    {
        title: 'lo que hacemos',
        href: '#lo-que-hacemos'
    },
    {
        title: 'team naranja',
        href: '#team-naranja'
    },
    {
        title: 'clientes',
        href: '#clientes'
    },
    {
        title: 'hablemos',
        href: '#hablemos'
    }
]

class App {
    constructor() {
        this.createNav();
    }

    createNav() {
        const container = document.getElementById('nav-container');
        navItems.forEach(item => {
            const li = document.createElement('li');
            const a = document.createElement('a');

            li.classList.add('nav-item');
            a.classList.add('nav-link');
            a.href = item.href;
            a.textContent = item.title.toUpperCase();

            // a.addEventListener('click', (e) => {
            //     for (const element of container.children) {
            //         if (element.firstElementChild.classList.contains('active')) {
            //             element.firstElementChild.classList.remove('active')
            //         }
            //     }
            //     e.target.classList.add('active')
            // })
            li.appendChild(a);
            container.appendChild(li);
        })
    }
}
new App();