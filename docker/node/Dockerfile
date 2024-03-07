FROM node:21

# Install dependencies
RUN apt-get update && apt-get install -y \
    vim \
    zip \
    unzip \
    curl

RUN npm install -g npm@10.5.0

# Change current user
USER node

EXPOSE 5173
EXPOSE 4173

# https://github.com/vitejs/vite/discussions/3396
CMD ["sh", "-c", "npm install && npm run dev --host"]
