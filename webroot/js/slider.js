const openBar = document.querySelector('.js-open-bar')
                    const closeBar = document.querySelector('.js-close-bar')
                    const listBar = document.querySelector('.js-bar')
                    function showBar (){
                        listBar.classList.add('open1')
                    }
                    function hideBar (){
                        listBar.classList.remove('open1')
                    }

                    openBar.addEventListener('click', showBar)
                    closeBar.addEventListener('click', hideBar)