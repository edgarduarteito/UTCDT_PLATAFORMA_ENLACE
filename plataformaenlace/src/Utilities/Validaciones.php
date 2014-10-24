<?php

namespace Utilities;

class Validaciones {

    public static function getProfilesInvitaciones($em, $estudio, $user) {
        $profiles = null;
        $entidad = $user->getProfileEmpleadoPublico()->getEntidad();
        $repository = $em->getRepository('ItoModelBundle:InvitacionParticipacionEstudio');
        foreach ($entidad->getEmpleadoPublicos() as $empleado) {
            $es_empleado_normal = true;
            $invitacion = $repository->findOneBy(array('profile_empleado_publico' => $empleado, 'estudio_previo' => $estudio));
            if (!$invitacion && $estudio->getProfileEmpleadoPublico()->getId() != $empleado->getId() && $empleado->getUser()->isEnabled()) {
                $roles = $empleado->getUser()->getRoles();
                foreach ($roles as $rol) {
                    if ($rol == 'ROLE_ADMINISTADOR_ENTIDAD_PUBLICA') {
                        $es_empleado_normal = false;
                        break;
                    }
                }
                if ($es_empleado_normal) {
                    $profiles[] = $empleado;
                }
            }
        }
        return $profiles;
    }

    public static function validarEdicionEstudio($user, $estudio) {
        $results = array('pertenece' => false, 'editar' => false, 'roles' => array(), 'participa' => false);
        $empleado = $user->getProfileEmpleadoPublico();

        $colaborativos = $empleado->getInvitacionParticipacionEstudios();

        if ($estudio->getProfileEmpleadoPublico()->getId() == $empleado->getId()) {
            $results['pertenece'] = true;
            $results['participa'] = true;
        }

        if (count($colaborativos) > 0) {
            foreach ($colaborativos as $col) {
                if ($col->getEstudioPrevio()->getId() == $estudio->getId()) {
                    foreach ($col->getRoles() as $rol) {
                        if ($rol->getEditar()) {
                            $results['editar'] = true;
                        } else {
                            $results['participa'] = true;
                        }
                        $results['roles'][] = $rol->getNombre();
                    }
                }
            }
        }

        return $results;
    }

}
