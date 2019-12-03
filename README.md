PKP Web Application Library para OJS 3.1.2 (SIDISI Revisión Académica)
=======

> Esta es una version personalizada de la librería PKP para SIDISI Revisión Académica. Esta versión de la librería es 3.1.2, que corresponse a la versión 3.1.2 de OJS. Asegurarse de trabajar en la rama stable-3_1_2-upch-rev-aca para esta versión, no confundir con stable-3_1_2 que es la rama original.

# Instalación en OJS (solo una vez)

Ejecutar en terminal en la carpeta de OJS:

    $ git checkout stable-3_1_2-upch-rev-aca
    $ git submodule add https://github.com/alvaro-ossio19/pkp-lib.git  lib/pkp

Esto habrá agregado la librería como submodulo en OJS en el archivo .gitmodules:

[submodule "lib/pkp"]
	path = lib/pkp
	url = https://github.com/alvaro-ossio19/pkp-lib.git

# Agregar repositorio padre de lib/pkp

Verificar los remotes de repositorio del proyecto en nuestro local:

    $ cd lib/pkp
    $ git remote -v
    > origin  https://github.com/alvaro-ossio19/pkp-lib.git (fetch)
    > origin  https://github.com/alvaro-ossio19/pkp-lib.git (push)

Si no existe el remote del repositorio padre, hacer lo siguiente:

    $ git remote add upstream https://github.com/pkp/pkp-lib.git

Volvemos a verificar los repositorios remotos:

    $ git remote -v
    > origin        https://github.com/alvaro-ossio19/pkp-lib.git (fetch)
    > origin        https://github.com/alvaro-ossio19/pkp-lib.git (push)
    > upstream      https://github.com/pkp/pkp-lib.git (fetch)
    > upstream      https://github.com/pkp/pkp-lib.git (push)

# Actualización con rama stable-3_1_2 del repositorio padre

Sincronizamos los repositorios remotos:

    $ git remote update

Si es la primera vez que iremos a la rama stable-3_1_2-upch-rev-aca del fork:

    $ git checkout --track origin/stable-3_1_2-upch-rev-aca

Para fusionar los cambios del repositorio padre desde upstream/stable-3_1_2 con la rama origin/stable-3_1_2-upch-rev-aca (fork):

    $ git checkout stable-3_1_2-upch-rev-aca
    $ git pull upstream stable-3_1_2
    $ git push

Vamos a la raíz de OJS para instalar o actualizar dependencias con Composer (https://getcomposer.org/):

    $ cd ../..
    $ composer --working-dir=lib/pkp update

## Git Tags:

Para crear un tag, nos vamos a la rama stable-3_1_2-upch-rev-aca del fork:

    $ git checkout stable-3_1_2-upch-rev-aca
    $ git tag 'ojs-3_1_2-2_upch-rev-aca' -a
    $ git push --tags

## Sincronizar tags con upstream

Cuando salen nuevas versiones de lib/pkp se crean nuevos tags en el repositorio padre. Para sincronizarlos con el fork:

    $ git fetch upstream
    $ git push
    $ git push --tags

PKP Web Application Library
=======

The PKP Web Application Library (PKP-WAL) is a library shared by [Open Journal Systems (OJS)](http://github.com/pkp/ojs), [Open Conference Systems (OCS)](http://github.com/pkp/ocs), [Open Monograph Press (OMP)](http://github.com/pkp/omp), and [Open Harvester Systems (OHS)](http://github.com/pkp/harvester). It is distributed with those applications in the `lib/pkp` subdirectory.

Issues (bugs) for all of those applications should be [created against this repository](https://github.com/pkp/pkp-lib/issues).

## Issues
Issues (bugs) for any of the PKP applications should be created here. If you're not sure whether you're encountering a bug or not, consider posting in the [PKP Community Forum](http://forum.pkp.sfu.ca/).

Before creating a new issue, please [search the existing ones](https://github.com/pkp/pkp-lib/issues) to make sure you're not creating a duplicate.

* [Create a new OMP issue](https://github.com/pkp/pkp-lib/issues/new?title=[OMP])
* [Create a new OJS issue](https://github.com/pkp/pkp-lib/issues/new?title=[OJS])
* [Create a new OCS issue](https://github.com/pkp/pkp-lib/issues/new?title=[OCS])
* [Create a new OHS issue](https://github.com/pkp/pkp-lib/issues/new?title=[OHS])

Bugs are scheduled against the milestones that a fix will be released in. For example, if a bug was found in OJS 2.4.5, then it will be scheduled against OJS 2.4.6, which is the first release that will include the fix.
