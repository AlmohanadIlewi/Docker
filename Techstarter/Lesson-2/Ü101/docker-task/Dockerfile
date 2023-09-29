# Verwende ein alpine-Image als Basis
FROM alpine:latest

# Installiere Node.js und npm
RUN apk update && apk add nodejs npm

# Erstelle das Arbeitsverzeichnis für die Anwendung
WORKDIR /app

# Kopiere die Anwendungsdateien in das Arbeitsverzeichnis
COPY package.json package-lock.json ./
COPY app.js /app/

# Installiere die Anwendungsabhängigkeiten
RUN npm install

# Starte die Anwendung
CMD ["node", "app.js"]


