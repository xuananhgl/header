const openMdal = document.querySelector('.js-open-model')
                const settingChanger = document.querySelector('.js-model')
                const closeMdal = document.querySelector('.js-close-model')
                function showChanger(){
                    settingChanger.classList.add('open')
                }
                function hideChanger(){
                    settingChanger.classList.remove('open')
                }
                openMdal.addEventListener('click', showChanger)
                closeMdal.addEventListener('click', hideChanger)