import java.util.Stack;
import java.util.*;

public class Balancing {
  public static void main (String [] args)
    {
      String one = "{}()(())[]";
      String two = "(){[][{]}}";
      System.out.println(checkBalanced(one));
      System.out.println(checkBalanced(two));
    }
  public static boolean checkBalanced(String check)
    {
      Stack<Character> s = new Stack<Character>();    // stack class,charecter type,object s
        for(int i=0;i<check.length();i++)
        {
          char let=check.charAt(i);
            if(let=='[' || let=='{' || let=='(')
              s.push(let);
            else if(let==']' || let=='}' || let==')')
            {
              if(s.empty())
                return false;
                switch(let)
                {
                  case ']':
                    if (s.pop() != '[')
                      return false;
                      break;
                  case '}':
                    if (s.pop() != '{')
                      return false;
                      break;
                  case ')':
                    if (s.pop() != '(')
                      return false;
                      break;
                default:
                  break;
              }
            }
          }
        if(s.empty())
      return true;
    return false;
  }
}