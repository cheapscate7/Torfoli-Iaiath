
#Main method - finds new Welsh words in the tweets
#tweet_list is a list returned from processexcel.py
most_common_words = None

def findNewWords(tweets_list, word_list_location):
    
    #find the x most common words the user wants
    most_common_words = raw_input("enter x where x is the most common words in the tweet list :> ")
    most_common_words = int(most_common_words)
    
    #find often repeated words
    tweet_dict = mostRepeated(tweets_list)
    
    #check remaining words against welsh dictionary to see if they already exist
    new_words = checkDict(tweet_dict, word_list_location)
    
    return new_words
    
def mostRepeated(tweets_list):
    #counter collection to find a list of tuples
    #of the x most common words in the tweets_list
    from collections import Counter
    return Counter(tweets_list).most_common(most_common_words)
     
def checkDict(tweet_dict, word_list_location):
    
    
    new_words = []
    #flag for new words
    is_there = False
    
    #read in a list of welsh words as a list
    with open(word_list_location) as line:
        Welsh_Dict = line.read().splitlines()
    
    #for word in the x most common tweets
    for w,count in tweet_dict:
        #and for each word in the welsh list of word
        for word in Welsh_Dict:
            
            #if there is a match, move on
            if word == w:
                is_there = True
        
        #if no match, add word to the new word list
        if is_there == False:
            new_words.append(w)
    
    return new_words