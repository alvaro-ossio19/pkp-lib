PKP Web Application Library para OJS 3.1.2 (SIDISI)
=======

> Esta es una version personalizada de la librería PKP para SIDISI. Esta versión de la librería es 3.1.2, que corresponse a la versión 3.1.2 de OJS.

# Instalación

Ejecutar en terminal en la carpeta de OJS:

    $ git submodule add https://github.com/alvaro-ossio19/pkp-lib.git  lib/pkp

Esto habrá agregado la librería como submodulo en OJS en el archivo .gitmodules:

[submodule "lib/pkp"]
	path = lib/pkp
	url = https://github.com/alvaro-ossio19/pkp-lib.git

Verificar los repositorios remotos del proyecto:

    $ git remote -v
    > origin  https://github.com/alvaro-ossio19/pkp-lib.git (fetch)
    > origin  https://github.com/alvaro-ossio19/pkp-lib.git (push)

Si no existe el repositorio original, hacer lo siguiente:

    $ git remote add upstream https://github.com/pkp/pkp-lib.git

Volvemos a verificar los repositorios remotos:

    $ git remote -v
    > origin        https://github.com/alvaro-ossio19/pkp-lib.git (fetch)
    > origin        https://github.com/alvaro-ossio19/pkp-lib.git (push)
    > upstream      https://github.com/pkp/pkp-lib.git (fetch)
    > upstream      https://github.com/pkp/pkp-lib.git (push)

# Actualización con repositorio padre

Vamos a la rama stable-3_1_2 (bifurcación):

    $ git remote update
    $ git fetch
    $ git checkout --track origin/stable-3_1_2

Para fusionar los cambios del repositorio padre desde upstream/stable-3_1_2 con la rama origin/stable-3_1_2 (bifurcación):

    $ git pull upstream stable-3_1_2
    $ git push


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
