#!/bin/bash

echo "🔄 Compilando CSS..."
cd arraiacker
npm run build-css

echo "🚀 Reiniciando container..."
cd ..
docker-compose restart arraiacker

echo "✅ Pronto! Acesse: http://localhost:8589"