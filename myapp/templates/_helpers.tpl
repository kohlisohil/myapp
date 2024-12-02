# templates/_helpers.tpl

{{- define "my-nginx.nginx.conf.template" -}}
{{- include "nginx.conf.template" . | indent 4 }}
{{- end -}}
