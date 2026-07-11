# Kubernetes manifests - `demo`

Este directorio contiene los manifiestos de Kubernetes para ejecutar la app `demo-app` en el namespace `ns-example`.

## ¿Qué se hizo aquí?

Se separó el manifiesto grande en archivos por recurso para mantener orden y facilitar aprendizaje/mantenimiento:

- `namespace.yaml`: crea el namespace `ns-example`.
- `deployment.yaml`: despliega la app (`demo-app`) con:
  - imagen desde registry local
  - probes (`readinessProbe` y `livenessProbe`)
  - variables cargadas desde ConfigMap y Secret
  - ejemplo comentado de `imagePullSecrets` para producción
- `service-clusterip.yaml`: service interno (`demo-app-svc`) para tráfico dentro del clúster.
- `service-nodeport.yaml`: service externo (`demo-app-svc-np`) por `NodePort` `32080` para acceso desde tu PC.
- `ingress.yaml`: expone la app por Ingress (`ingressClassName: nginx`) apuntando a `demo-app-svc`.
- `configmap.yaml`: configuración no sensible.
- `secret.yaml`: datos sensibles (en este repo están como ejemplo local).

## Arquitectura rápida

- Ingress -> `demo-app-svc` (ClusterIP) -> Pod `demo-app`
- Acceso local directo -> `demo-app-svc-np` (NodePort `32080`)

## Comandos básicos

Aplicar todo:

```powershell
kubectl apply -f .\k8s\
```

Ver estado general:

```powershell
kubectl get deploy,pods,svc,ingress -n ns-example
```

Ver ConfigMap/Secret:

```powershell
kubectl get configmap,secret -n ns-example
```

## ¿Cómo acceder a la app?

### Opción A (NodePort, recomendada en local)

Si el cluster k3d fue creado con mapeo del puerto `32080`, abre:

- `http://localhost:32080/`

### Opción B (Ingress)

Si tienes `ingress-nginx` activo y puerto mapeado en el LB, usa:

- `http://localhost:9000/`

## Notas para producción

- No subir secretos reales al repo.
- Reemplazar `secret.yaml` por solución segura (Sealed Secrets / External Secrets / Vault).
- Activar `imagePullSecrets` en `deployment.yaml` si usas registry privado.
- Mantener probes y definir `resources` (`requests/limits`).

## Hardening recomendado (estándar)

Para un baseline de seguridad en Kubernetes, puedes usar este patrón en `Deployment`:

```yaml
spec:
  template:
    spec:
      securityContext:
        seccompProfile:
          type: RuntimeDefault
      containers:
        - name: demo-app
          securityContext:
            runAsNonRoot: true
            allowPrivilegeEscalation: false
            readOnlyRootFilesystem: true
            capabilities:
              drop: ["ALL"]
          volumeMounts:
            - name: tmp
              mountPath: /tmp
      volumes:
        - name: tmp
          emptyDir: {}
```

Notas:

- `runAsNonRoot` evita ejecución como root.
- `allowPrivilegeEscalation: false` bloquea escalación de privilegios.
- `readOnlyRootFilesystem` protege el sistema de archivos raíz.
- `emptyDir` en `/tmp` evita fallos de apps que necesitan escritura temporal.

## Troubleshooting rápido

Si algo falla:

```powershell
kubectl get events -n ns-example --sort-by=.metadata.creationTimestamp
kubectl describe pod -n ns-example -l app=demo-app
kubectl logs -n ns-example -l app=demo-app --tail=100
```

Si aparece conflicto por `NodePort` (ej. `32080 already allocated`), revisa servicios existentes en el namespace y limpia el que ya no uses.
