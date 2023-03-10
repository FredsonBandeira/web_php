import random

"""
Um vagão é uma lista [mercadoria, quant] com 0<quant<=60 toneladas.
Um comboio é uma lista de vagões.
"""

# Capacidade máxima dos vagões:
Qmax = 60

# Constantes para indexar os vagões.
# Se w==['coal', 45], então w[M]=='coal' e w[Q]==45.
M,Q = 0,1

# Esta função cria um comboio aleatório (NÃO PRECISA PERCEBER).
def randomTrain(a, b=0):
    types = ["coal", "iron", "sand", "salt", "sugar", "rice"]
    n = a if a>b else random.randint(a, b)
    train = []
    for i in range(n):
        wagon = [random.choice(types), random.randint(1, Qmax)]
        train.append(wagon)
    return train


#a)
def quantidadeDe(t, m):
    """Quantidade total de mercadoria de tipo m no comboio t."""
    ...

#b)
def descarregar(t, m, q):
    """Descarrega quantidade q de mercadoria de tipo m."""
    ...

#c)
def mercadoria(t):
    """Devolve tabela com a quantidade de cada mercadoria no comboio t."""
    ...

#d)
def trainsPorMercadoria(trains):
    ...


def main():
    random.seed("abc") # Pode alterar o argumento para obter comboios distintos

    t = [['coal', 30], ['rice', 50], ['iron', 5], ['rice', 42], ['coal', 45]]
    #t = randomTrain(5)  # descomente se quiser gerar outro comboio
    print("t:", t)

    print("\na)")
    print(quantidadeDe(t, 'rice'),    # 92
          quantidadeDe(t, 'iron'),    # 5
          quantidadeDe(t, 'coal'),    # 75

    print("\nb)")
    q = descarregar(t, 'rice', 40)
    print("descarregar(t, 'rice', 40) ->", q)
    print("t:", t)
    q =descarregar(t, 'coal', 50)
    print("descarregar(t, 'coal', 50) ->", q)
    print("t:", t)
    q =descarregar(t, 'iron', 20)
    print("descarregar(t, 'iron', 20) ->", q)
    print("t:", t)

    print("\nc)")
    print(mercadoria(t))
    print("t:", t)

    print("\nd)")
    trains = { tid: randomTrain(1,5) for tid in ['T1', 'T2', 'T3', 'T4'] }
    print("trains:", trains)
    trainsPorM = trainsPorMercadoria(trains)
    print(trainsPorM)

####
if __name__ == "__main__":
    main()