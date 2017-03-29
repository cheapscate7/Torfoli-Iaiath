
# file = excel file of tweets, n = number of rows of tweets
def pe(file, n):
    import csv
    import re
    x = 0
    tweets = []
    with open(file, 'rb') as f:
        reader = csv.reader(f)
        for row in reader:
            if x < n:
                tweets.append(row[2])
                x = x + 1
            else:
                break
            

    x = 0
    for tweet in tweets:
        tweet = ' '.join(re.sub("(@[A-Za-z0-9_]+)|([^0-9A-Za-z \t])|(\w+:\/\/\S+)|(RT)|(xx+)|([0-9]+)"," ",tweet).split())
        tweets[x] = tweet
        x = x + 1

    x = 0
    for tweet in tweets:
        tweet = re.sub("[^\w]", " ", tweet).split()
        tweets[x] = tweet
        x = x + 1

    tweets = [item for sublist in tweets for item in sublist]
    return tweets






